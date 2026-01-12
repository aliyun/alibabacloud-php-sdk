<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectBuildDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectBuildDetailResponseBody\data\instanceDetailResponseList;

class data extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var instanceDetailResponseList[]
     */
    public $instanceDetailResponseList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'instanceDetailResponseList' => 'InstanceDetailResponseList',
        'status' => 'Status',
        'title' => 'Title',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceDetailResponseList)) {
            Model::validateArray($this->instanceDetailResponseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceDetailResponseList) {
            if (\is_array($this->instanceDetailResponseList)) {
                $res['InstanceDetailResponseList'] = [];
                $n1 = 0;
                foreach ($this->instanceDetailResponseList as $item1) {
                    $res['InstanceDetailResponseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceDetailResponseList'])) {
            if (!empty($map['InstanceDetailResponseList'])) {
                $model->instanceDetailResponseList = [];
                $n1 = 0;
                foreach ($map['InstanceDetailResponseList'] as $item1) {
                    $model->instanceDetailResponseList[$n1] = instanceDetailResponseList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
