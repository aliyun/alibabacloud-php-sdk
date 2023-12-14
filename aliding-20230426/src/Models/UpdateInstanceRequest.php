<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @example APP_PBxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example f30233fb-72e1-4af4-8cb8-c7e0ea9ee530
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @example hexxyy
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example {}
     *
     * @var string
     */
    public $updateFormDataJson;
    protected $_name = [
        'appType'            => 'AppType',
        'language'           => 'Language',
        'processInstanceId'  => 'ProcessInstanceId',
        'systemToken'        => 'SystemToken',
        'updateFormDataJson' => 'UpdateFormDataJson',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
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
