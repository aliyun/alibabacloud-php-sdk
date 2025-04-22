<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class FileAddPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var FilePermissionMember[]
     */
    public $memberList;
    protected $_name = [
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'memberList' => 'member_list',
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
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->memberList) {
            if (\is_array($this->memberList)) {
                $res['member_list'] = [];
                $n1 = 0;
                foreach ($this->memberList as $item1) {
                    $res['member_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['member_list'])) {
            if (!empty($map['member_list'])) {
                $model->memberList = [];
                $n1 = 0;
                foreach ($map['member_list'] as $item1) {
                    $model->memberList[$n1++] = FilePermissionMember::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
