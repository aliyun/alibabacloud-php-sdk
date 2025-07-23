<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Tea\Model;

class SyncAppInstanceForPartnerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceShrink;

    /**
     * @example CREATE
     *
     * @var string
     */
    public $eventType;

    /**
     * @example system
     *
     * @var string
     */
    public $operator;

    /**
     * @example 31104757
     *
     * @var string
     */
    public $sourceBizId;

    /**
     * @example MARKET_CLOUD_DREAM
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'appInstanceShrink' => 'AppInstance',
        'eventType' => 'EventType',
        'operator' => 'Operator',
        'sourceBizId' => 'SourceBizId',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceShrink) {
            $res['AppInstance'] = $this->appInstanceShrink;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->sourceBizId) {
            $res['SourceBizId'] = $this->sourceBizId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncAppInstanceForPartnerShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstance'])) {
            $model->appInstanceShrink = $map['AppInstance'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['SourceBizId'])) {
            $model->sourceBizId = $map['SourceBizId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
