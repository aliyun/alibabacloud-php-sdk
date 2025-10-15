<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListNetworkZonesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $networkZoneIds;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $previousToken;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'networkZoneIds' => 'NetworkZoneIds',
        'nextToken' => 'NextToken',
        'previousToken' => 'PreviousToken',
    ];

    public function validate()
    {
        if (\is_array($this->networkZoneIds)) {
            Model::validateArray($this->networkZoneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->networkZoneIds) {
            if (\is_array($this->networkZoneIds)) {
                $res['NetworkZoneIds'] = [];
                $n1 = 0;
                foreach ($this->networkZoneIds as $item1) {
                    $res['NetworkZoneIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->previousToken) {
            $res['PreviousToken'] = $this->previousToken;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NetworkZoneIds'])) {
            if (!empty($map['NetworkZoneIds'])) {
                $model->networkZoneIds = [];
                $n1 = 0;
                foreach ($map['NetworkZoneIds'] as $item1) {
                    $model->networkZoneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PreviousToken'])) {
            $model->previousToken = $map['PreviousToken'];
        }

        return $model;
    }
}
