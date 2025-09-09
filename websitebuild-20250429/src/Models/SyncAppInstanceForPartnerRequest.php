<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest\appInstance;

class SyncAppInstanceForPartnerRequest extends Model
{
    /**
     * @var appInstance
     */
    public $appInstance;

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
        'appInstance' => 'AppInstance',
        'eventType' => 'EventType',
        'operator' => 'Operator',
        'sourceBizId' => 'SourceBizId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (null !== $this->appInstance) {
            $this->appInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstance) {
            $res['AppInstance'] = null !== $this->appInstance ? $this->appInstance->toArray($noStream) : $this->appInstance;
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
            $model->appInstance = appInstance::fromMap($map['AppInstance']);
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
