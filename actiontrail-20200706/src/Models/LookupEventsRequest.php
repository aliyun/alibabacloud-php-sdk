<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsRequest\lookupAttribute;

class LookupEventsRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var lookupAttribute[]
     */
    public $lookupAttribute;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'lookupAttribute' => 'LookupAttribute',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->lookupAttribute)) {
            Model::validateArray($this->lookupAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lookupAttribute) {
            if (\is_array($this->lookupAttribute)) {
                $res['LookupAttribute'] = [];
                $n1 = 0;
                foreach ($this->lookupAttribute as $item1) {
                    $res['LookupAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LookupAttribute'])) {
            if (!empty($map['LookupAttribute'])) {
                $model->lookupAttribute = [];
                $n1 = 0;
                foreach ($map['LookupAttribute'] as $item1) {
                    $model->lookupAttribute[$n1] = lookupAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
