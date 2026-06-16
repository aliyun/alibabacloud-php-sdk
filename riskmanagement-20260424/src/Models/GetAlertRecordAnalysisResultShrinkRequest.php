<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class GetAlertRecordAnalysisResultShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var string
     */
    public $uniqueTagListShrink;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alarmUniqueInfo' => 'AlarmUniqueInfo',
        'aliyunLang' => 'AliyunLang',
        'uniqueInfo' => 'UniqueInfo',
        'uniqueTagListShrink' => 'UniqueTagList',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }

        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }

        if (null !== $this->uniqueTagListShrink) {
            $res['UniqueTagList'] = $this->uniqueTagListShrink;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }

        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }

        if (isset($map['UniqueTagList'])) {
            $model->uniqueTagListShrink = $map['UniqueTagList'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
