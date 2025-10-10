<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppRecordTemplateRequest\recordTemplate;

class ModifyAppRecordTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var recordTemplate
     */
    public $recordTemplate;
    protected $_name = [
        'appId' => 'AppId',
        'clientToken' => 'ClientToken',
        'recordTemplate' => 'RecordTemplate',
    ];

    public function validate()
    {
        if (null !== $this->recordTemplate) {
            $this->recordTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->recordTemplate) {
            $res['RecordTemplate'] = null !== $this->recordTemplate ? $this->recordTemplate->toArray($noStream) : $this->recordTemplate;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['RecordTemplate'])) {
            $model->recordTemplate = recordTemplate::fromMap($map['RecordTemplate']);
        }

        return $model;
    }
}
