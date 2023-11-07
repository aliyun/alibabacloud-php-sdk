<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsRequest\lookupAttribute;
use AlibabaCloud\Tea\Model;

class LookupEventsRequest extends Model
{
    /**
     * @description The order in which details of events are to be retrieved. Valid values:
     *
     *   FORWARD: ascending order.
     *   BACKWARD: descending order. This is the default value.
     *
     * @example BACKWARD
     *
     * @var string
     */
    public $direction;

    /**
     * @description The end of the time range to query. The default time is the current time. Specify the time in the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * @example 2020-10-15T11:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Query conditions.
     *
     * @var lookupAttribute[]
     */
    public $lookupAttribute;

    /**
     * @description The maximum number of entries to be returned.
     *
     * Valid values: 0 to 50.
     * @example 20
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The token used to request the next page of query results.
     *
     * > The request parameters must be the same as those of the last request.
     * @example eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The beginning of the time range to query. The default time is seven days prior to the current time. Specify the time in the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * @example 2020-10-08T11:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'direction'       => 'Direction',
        'endTime'         => 'EndTime',
        'lookupAttribute' => 'LookupAttribute',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lookupAttribute) {
            $res['LookupAttribute'] = [];
            if (null !== $this->lookupAttribute && \is_array($this->lookupAttribute)) {
                $n = 0;
                foreach ($this->lookupAttribute as $item) {
                    $res['LookupAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return LookupEventsRequest
     */
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
                $n                      = 0;
                foreach ($map['LookupAttribute'] as $item) {
                    $model->lookupAttribute[$n++] = null !== $item ? lookupAttribute::fromMap($item) : $item;
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
