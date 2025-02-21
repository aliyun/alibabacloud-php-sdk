<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ListComponentsRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationNames;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string[]
     */
    public $componentNames;
    /**
     * @var string[]
     */
    public $componentStates;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationNames' => 'ApplicationNames',
        'clusterId'        => 'ClusterId',
        'componentNames'   => 'ComponentNames',
        'componentStates'  => 'ComponentStates',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationNames)) {
            Model::validateArray($this->applicationNames);
        }
        if (\is_array($this->componentNames)) {
            Model::validateArray($this->componentNames);
        }
        if (\is_array($this->componentStates)) {
            Model::validateArray($this->componentStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationNames) {
            if (\is_array($this->applicationNames)) {
                $res['ApplicationNames'] = [];
                $n1                      = 0;
                foreach ($this->applicationNames as $item1) {
                    $res['ApplicationNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->componentNames) {
            if (\is_array($this->componentNames)) {
                $res['ComponentNames'] = [];
                $n1                    = 0;
                foreach ($this->componentNames as $item1) {
                    $res['ComponentNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->componentStates) {
            if (\is_array($this->componentStates)) {
                $res['ComponentStates'] = [];
                $n1                     = 0;
                foreach ($this->componentStates as $item1) {
                    $res['ComponentStates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['ApplicationNames'])) {
            if (!empty($map['ApplicationNames'])) {
                $model->applicationNames = [];
                $n1                      = 0;
                foreach ($map['ApplicationNames'] as $item1) {
                    $model->applicationNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ComponentNames'])) {
            if (!empty($map['ComponentNames'])) {
                $model->componentNames = [];
                $n1                    = 0;
                foreach ($map['ComponentNames'] as $item1) {
                    $model->componentNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ComponentStates'])) {
            if (!empty($map['ComponentStates'])) {
                $model->componentStates = [];
                $n1                     = 0;
                foreach ($map['ComponentStates'] as $item1) {
                    $model->componentStates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
