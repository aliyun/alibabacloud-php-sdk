<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class BatchUpdateFormDataByInstanceIdRequest extends Model
{
    /**
     * @example String
     *
     * @var string
     */
    public $appType;

    /**
     * @example true
     *
     * @var bool
     */
    public $asynchronousExecution;

    /**
     * @description This parameter is required.
     *
     * @example [ "FINST-J8766S91O2UYN87ZX3XOF1MY8MBA2912BSV0L24" ]
     *
     * @var string[]
     */
    public $formInstanceIdList;

    /**
     * @description This parameter is required.
     *
     * @example FORM-GX866MC1NC1VOFF6WVQW33FD16E23L3CPMKVKA
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example true
     *
     * @var bool
     */
    public $ignoreEmpty;

    /**
     * @example false
     *
     * @var bool
     */
    public $noExecuteExpression;

    /**
     * @description This parameter is required.
     *
     * @example 09866181UTZVVD4R3DC955FNKIM52HVPU5WWK7
     *
     * @var string
     */
    public $systemToken;

    /**
     * @description This parameter is required.
     *
     * @example {\"countrySelectField_l0c1cwiu\":[{\"value\":\"US\"}],\"addressField_l0c1cwiy\":{\"address\":\"111\",\"regionIds\":[460000,469027,469023401],\"regionText\":[{\"en_US\":\"hai+nan+sheng\",\"zh_CN\":\"海南省\"},{\"en_US\":\"cheng+mai+xian\",\"zh_CN\":\"澄迈县\"},{\"en_US\":\"guo+ying+hong+gang+nong+chang\",\"zh_CN\":\"国营红岗农场\"}]}}
     *
     * @var string
     */
    public $updateFormDataJson;

    /**
     * @example false
     *
     * @var bool
     */
    public $useLatestFormSchemaVersion;
    protected $_name = [
        'appType'                    => 'AppType',
        'asynchronousExecution'      => 'AsynchronousExecution',
        'formInstanceIdList'         => 'FormInstanceIdList',
        'formUuid'                   => 'FormUuid',
        'ignoreEmpty'                => 'IgnoreEmpty',
        'noExecuteExpression'        => 'NoExecuteExpression',
        'systemToken'                => 'SystemToken',
        'updateFormDataJson'         => 'UpdateFormDataJson',
        'useLatestFormSchemaVersion' => 'UseLatestFormSchemaVersion',
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
        if (null !== $this->asynchronousExecution) {
            $res['AsynchronousExecution'] = $this->asynchronousExecution;
        }
        if (null !== $this->formInstanceIdList) {
            $res['FormInstanceIdList'] = $this->formInstanceIdList;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->ignoreEmpty) {
            $res['IgnoreEmpty'] = $this->ignoreEmpty;
        }
        if (null !== $this->noExecuteExpression) {
            $res['NoExecuteExpression'] = $this->noExecuteExpression;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }
        if (null !== $this->updateFormDataJson) {
            $res['UpdateFormDataJson'] = $this->updateFormDataJson;
        }
        if (null !== $this->useLatestFormSchemaVersion) {
            $res['UseLatestFormSchemaVersion'] = $this->useLatestFormSchemaVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateFormDataByInstanceIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['AsynchronousExecution'])) {
            $model->asynchronousExecution = $map['AsynchronousExecution'];
        }
        if (isset($map['FormInstanceIdList'])) {
            if (!empty($map['FormInstanceIdList'])) {
                $model->formInstanceIdList = $map['FormInstanceIdList'];
            }
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['IgnoreEmpty'])) {
            $model->ignoreEmpty = $map['IgnoreEmpty'];
        }
        if (isset($map['NoExecuteExpression'])) {
            $model->noExecuteExpression = $map['NoExecuteExpression'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }
        if (isset($map['UpdateFormDataJson'])) {
            $model->updateFormDataJson = $map['UpdateFormDataJson'];
        }
        if (isset($map['UseLatestFormSchemaVersion'])) {
            $model->useLatestFormSchemaVersion = $map['UseLatestFormSchemaVersion'];
        }

        return $model;
    }
}
