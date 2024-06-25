<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class ListEventStreamingsRequest extends Model
{
    /**
     * @description The maximum number of entries to be returned in a call. You can use this parameter and NextToken to implement paging. A maximum of 100 entries can be returned in a call.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The name of the event stream that you want to query.
     *
     * @example name
     *
     * @var string
     */
    public $namePrefix;

    /**
     * @description If you configure Limit and excess return values exist, this parameter is returned.
     *
     * @example 10
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ARN of the event target.
     *
     * @example acs:fc:cn-hangzhou:118609547428****:services/fw1.LATEST/functions/log1
     *
     * @var string
     */
    public $sinkArn;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the event source.
     *
     * @var string
     */
    public $sourceArn;
    protected $_name = [
        'limit'      => 'Limit',
        'namePrefix' => 'NamePrefix',
        'nextToken'  => 'NextToken',
        'sinkArn'    => 'SinkArn',
        'sourceArn'  => 'SourceArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->namePrefix) {
            $res['NamePrefix'] = $this->namePrefix;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->sinkArn) {
            $res['SinkArn'] = $this->sinkArn;
        }
        if (null !== $this->sourceArn) {
            $res['SourceArn'] = $this->sourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventStreamingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NamePrefix'])) {
            $model->namePrefix = $map['NamePrefix'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SinkArn'])) {
            $model->sinkArn = $map['SinkArn'];
        }
        if (isset($map['SourceArn'])) {
            $model->sourceArn = $map['SourceArn'];
        }

        return $model;
    }
}
