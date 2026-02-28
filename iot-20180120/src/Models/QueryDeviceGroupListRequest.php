<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class QueryDeviceGroupListRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $groupTypes;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $superGroupId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'groupName' => 'GroupName',
        'groupTypes' => 'GroupTypes',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize' => 'PageSize',
        'superGroupId' => 'SuperGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->groupTypes)) {
            Model::validateArray($this->groupTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupTypes) {
            if (\is_array($this->groupTypes)) {
                $res['GroupTypes'] = [];
                $n1 = 0;
                foreach ($this->groupTypes as $item1) {
                    $res['GroupTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->superGroupId) {
            $res['SuperGroupId'] = $this->superGroupId;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupTypes'])) {
            if (!empty($map['GroupTypes'])) {
                $model->groupTypes = [];
                $n1 = 0;
                foreach ($map['GroupTypes'] as $item1) {
                    $model->groupTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SuperGroupId'])) {
            $model->superGroupId = $map['SuperGroupId'];
        }

        return $model;
    }
}
