<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateFormDataRequest extends Model
{
    /**
     * @example APP_XCE0EVXS6DYG3YDYC5RD
     *
     * @var string
     */
    public $appType;

    /**
     * @example {\\"countrySelectField_l0c1cwiu\\":[{\\"value\\":\\"US\\"}]}
     *
     * @var string
     */
    public $formDataJson;

    /**
     * @example FORM-GX866MC1NC1VOFF6WVQW33FD16E23L3CPMKVKA
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example false
     *
     * @var bool
     */
    public $noExecuteExpression;

    /**
     * @var string
     */
    public $searchCondition;

    /**
     * @example 09866181UTZVVD4R3DC955FNKIM52HVPU5WWK7
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example 012345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appType'             => 'AppType',
        'formDataJson'        => 'FormDataJson',
        'formUuid'            => 'FormUuid',
        'noExecuteExpression' => 'NoExecuteExpression',
        'searchCondition'     => 'SearchCondition',
        'systemToken'         => 'SystemToken',
        'userId'              => 'UserId',
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
        if (null !== $this->noExecuteExpression) {
            $res['NoExecuteExpression'] = $this->noExecuteExpression;
        }
        if (null !== $this->searchCondition) {
            $res['SearchCondition'] = $this->searchCondition;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateFormDataRequest
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
        if (isset($map['NoExecuteExpression'])) {
            $model->noExecuteExpression = $map['NoExecuteExpression'];
        }
        if (isset($map['SearchCondition'])) {
            $model->searchCondition = $map['SearchCondition'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
