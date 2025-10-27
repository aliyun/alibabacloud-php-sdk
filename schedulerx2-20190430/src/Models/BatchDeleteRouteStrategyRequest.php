<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteRouteStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int[]
     */
    public $jobIdList;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupId' => 'GroupId',
        'jobIdList' => 'JobIdList',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->jobIdList)) {
            Model::validateArray($this->jobIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->jobIdList) {
            if (\is_array($this->jobIdList)) {
                $res['JobIdList'] = [];
                $n1 = 0;
                foreach ($this->jobIdList as $item1) {
                    $res['JobIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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

        if (isset($map['JobIdList'])) {
            if (!empty($map['JobIdList'])) {
                $model->jobIdList = [];
                $n1 = 0;
                foreach ($map['JobIdList'] as $item1) {
                    $model->jobIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
