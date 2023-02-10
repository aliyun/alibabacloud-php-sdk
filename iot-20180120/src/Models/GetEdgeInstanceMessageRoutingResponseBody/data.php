<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceMessageRoutingResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceMessageRoutingResponseBody\data\routeContext;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2020-05-25 19:54:59
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1590407699000
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @example 2020-05-25 19:54:59
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1590407699000
     *
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @example sample
     *
     * @var string
     */
    public $name;

    /**
     * @var routeContext
     */
    public $routeContext;

    /**
     * @example #
     *
     * @var string
     */
    public $sourceData;

    /**
     * @example device
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 58c46749ac934db3925fe5********
     *
     * @var string
     */
    public $targetData;

    /**
     * @example IotHub
     *
     * @var string
     */
    public $targetType;

    /**
     * @example all
     *
     * @var string
     */
    public $topicFilter;
    protected $_name = [
        'gmtCreate'            => 'GmtCreate',
        'gmtCreateTimestamp'   => 'GmtCreateTimestamp',
        'gmtModified'          => 'GmtModified',
        'gmtModifiedTimestamp' => 'GmtModifiedTimestamp',
        'name'                 => 'Name',
        'routeContext'         => 'RouteContext',
        'sourceData'           => 'SourceData',
        'sourceType'           => 'SourceType',
        'targetData'           => 'TargetData',
        'targetType'           => 'TargetType',
        'topicFilter'          => 'TopicFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->routeContext) {
            $res['RouteContext'] = null !== $this->routeContext ? $this->routeContext->toMap() : null;
        }
        if (null !== $this->sourceData) {
            $res['SourceData'] = $this->sourceData;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->targetData) {
            $res['TargetData'] = $this->targetData;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->topicFilter) {
            $res['TopicFilter'] = $this->topicFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RouteContext'])) {
            $model->routeContext = routeContext::fromMap($map['RouteContext']);
        }
        if (isset($map['SourceData'])) {
            $model->sourceData = $map['SourceData'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TargetData'])) {
            $model->targetData = $map['TargetData'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TopicFilter'])) {
            $model->topicFilter = $map['TopicFilter'];
        }

        return $model;
    }
}
