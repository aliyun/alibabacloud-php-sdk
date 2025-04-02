<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateOrUpdateFormDataRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $formDataJson;

    /**
     * @var string
     */
    public $formUuid;

    /**
     * @var bool
     */
    public $noExecuteExpression;

    /**
     * @var string
     */
    public $searchCondition;

    /**
     * @var string
     */
    public $systemToken;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appType' => 'AppType',
        'formDataJson' => 'FormDataJson',
        'formUuid' => 'FormUuid',
        'noExecuteExpression' => 'NoExecuteExpression',
        'searchCondition' => 'SearchCondition',
        'systemToken' => 'SystemToken',
        'userId' => 'UserId',
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
