<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ListK8sConfigMapsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var mixed[]
     */
    public $condition;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $showRelatedApps;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'condition' => 'Condition',
        'namespace' => 'Namespace',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'showRelatedApps' => 'ShowRelatedApps',
    ];

    public function validate()
    {
        if (\is_array($this->condition)) {
            Model::validateArray($this->condition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->condition) {
            if (\is_array($this->condition)) {
                $res['Condition'] = [];
                foreach ($this->condition as $key1 => $value1) {
                    $res['Condition'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->showRelatedApps) {
            $res['ShowRelatedApps'] = $this->showRelatedApps;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                foreach ($map['Condition'] as $key1 => $value1) {
                    $model->condition[$key1] = $value1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ShowRelatedApps'])) {
            $model->showRelatedApps = $map['ShowRelatedApps'];
        }

        return $model;
    }
}
