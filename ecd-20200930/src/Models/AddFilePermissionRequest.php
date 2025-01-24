<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest\memberList;

class AddFilePermissionRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $fileId;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var memberList[]
     */
    public $memberList;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'      => 'CdsId',
        'endUserId'  => 'EndUserId',
        'fileId'     => 'FileId',
        'groupId'    => 'GroupId',
        'memberList' => 'MemberList',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->memberList)) {
            Model::validateArray($this->memberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->memberList) {
            if (\is_array($this->memberList)) {
                $res['MemberList'] = [];
                $n1                = 0;
                foreach ($this->memberList as $item1) {
                    $res['MemberList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = [];
                $n1                = 0;
                foreach ($map['MemberList'] as $item1) {
                    $model->memberList[$n1++] = memberList::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
