<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $systemToken;

    /**
     * @var string
     */
    public $updateFormDataJson;
    protected $_name = [
        'appType' => 'AppType',
        'language' => 'Language',
        'processInstanceId' => 'ProcessInstanceId',
        'systemToken' => 'SystemToken',
        'updateFormDataJson' => 'UpdateFormDataJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        if (null !== $this->updateFormDataJson) {
            $res['UpdateFormDataJson'] = $this->updateFormDataJson;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        if (isset($map['UpdateFormDataJson'])) {
            $model->updateFormDataJson = $map['UpdateFormDataJson'];
        }

        return $model;
    }
}
