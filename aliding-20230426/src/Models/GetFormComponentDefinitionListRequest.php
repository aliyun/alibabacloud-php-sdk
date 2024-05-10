<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetFormComponentDefinitionListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example APP_PBKT0xxx
     *
     * @var string
     */
    public $appType;

    /**
     * @description This parameter is required.
     *
     * @example FORM-xxxxx
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
        'appType'     => 'AppType',
        'formUuid'    => 'FormUuid',
        'language'    => 'Language',
        'systemToken' => 'SystemToken',
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
     * @return GetFormComponentDefinitionListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
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
