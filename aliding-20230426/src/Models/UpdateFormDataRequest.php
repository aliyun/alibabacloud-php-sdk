<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateFormDataRequest extends Model
{
    /**
     * @example APP_PBKTxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example FORM_INxxx
     *
     * @var string
     */
    public $formInstanceId;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example hexxxx
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

    /**
     * @example false
     *
     * @var bool
     */
    public $useLatestVersion;
    protected $_name = [
        'appType'            => 'AppType',
        'formInstanceId'     => 'FormInstanceId',
        'language'           => 'Language',
        'systemToken'        => 'SystemToken',
        'updateFormDataJson' => 'UpdateFormDataJson',
        'useLatestVersion'   => 'UseLatestVersion',
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
        if (null !== $this->formInstanceId) {
            $res['FormInstanceId'] = $this->formInstanceId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }
        if (null !== $this->updateFormDataJson) {
            $res['UpdateFormDataJson'] = $this->updateFormDataJson;
        }
        if (null !== $this->useLatestVersion) {
            $res['UseLatestVersion'] = $this->useLatestVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFormDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['FormInstanceId'])) {
            $model->formInstanceId = $map['FormInstanceId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }
        if (isset($map['UpdateFormDataJson'])) {
            $model->updateFormDataJson = $map['UpdateFormDataJson'];
        }
        if (isset($map['UseLatestVersion'])) {
            $model->useLatestVersion = $map['UseLatestVersion'];
        }

        return $model;
    }
}
