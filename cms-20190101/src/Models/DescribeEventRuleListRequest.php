<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeEventRuleListRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $isEnable;

    /**
     * @var string
     */
    public $namePrefix;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupId' => 'GroupId',
        'isEnable' => 'IsEnable',
        'namePrefix' => 'NamePrefix',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }

        if (null !== $this->namePrefix) {
            $res['NamePrefix'] = $this->namePrefix;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }

        if (isset($map['NamePrefix'])) {
            $model->namePrefix = $map['NamePrefix'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
