<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListDeviceGroupsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $deviceGroupIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'deviceGroupIds' => 'DeviceGroupIds',
        'name' => 'Name',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->deviceGroupIds)) {
            Model::validateArray($this->deviceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->deviceGroupIds) {
            if (\is_array($this->deviceGroupIds)) {
                $res['DeviceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->deviceGroupIds as $item1) {
                    $res['DeviceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['DeviceGroupIds'])) {
            if (!empty($map['DeviceGroupIds'])) {
                $model->deviceGroupIds = [];
                $n1 = 0;
                foreach ($map['DeviceGroupIds'] as $item1) {
                    $model->deviceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
