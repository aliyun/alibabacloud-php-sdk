<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class SaveFormDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example APP_PBKxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @description This parameter is required.
     *
     * @example {\"textField_jcpm6agt\": \"单行\",\"employeeField_jcos0sar\": [\"workno\"]}
     *
     * @var string
     */
    public $formDataJson;

    /**
     * @description This parameter is required.
     *
     * @example FORM-EF6Y4G8WO2FN0SUB43TDQ3CGC3FMFQ1G9400RCJ3
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @description This parameter is required.
     *
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'      => 'AppType',
        'formDataJson' => 'FormDataJson',
        'formUuid'     => 'FormUuid',
        'language'     => 'Language',
        'systemToken'  => 'SystemToken',
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
        if (null !== $this->formDataJson) {
            $res['FormDataJson'] = $this->formDataJson;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveFormDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['FormDataJson'])) {
            $model->formDataJson = $map['FormDataJson'];
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
