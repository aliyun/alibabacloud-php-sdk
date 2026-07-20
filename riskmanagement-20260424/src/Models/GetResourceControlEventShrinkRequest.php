<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class GetResourceControlEventShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventIdListShrink;
    protected $_name = [
        'aliyunLang' => 'AliyunLang',
        'eventId' => 'EventId',
        'eventIdListShrink' => 'EventIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventIdListShrink) {
            $res['EventIdList'] = $this->eventIdListShrink;
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
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventIdList'])) {
            $model->eventIdListShrink = $map['EventIdList'];
        }

        return $model;
    }
}
