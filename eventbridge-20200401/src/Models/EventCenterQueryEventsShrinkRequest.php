<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class EventCenterQueryEventsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $bodyShrink;

    /**
     * @example default
     *
     * @var string
     */
    public $busName;

    /**
     * @description 本次读取的最大数据量，默认值为100。
     *
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 用来标记当前开始读取的位置。置空表示从头开始。
     *
     * @example 100
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'bodyShrink' => 'Body',
        'busName'    => 'BusName',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyShrink) {
            $res['Body'] = $this->bodyShrink;
        }
        if (null !== $this->busName) {
            $res['BusName'] = $this->busName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EventCenterQueryEventsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->bodyShrink = $map['Body'];
        }
        if (isset($map['BusName'])) {
            $model->busName = $map['BusName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
