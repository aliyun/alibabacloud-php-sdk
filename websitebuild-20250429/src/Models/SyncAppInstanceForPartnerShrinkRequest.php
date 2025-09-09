<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class SyncAppInstanceForPartnerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceShrink;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $sourceBizId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
