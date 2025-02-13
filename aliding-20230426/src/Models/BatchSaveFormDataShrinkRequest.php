<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class BatchSaveFormDataShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appType;
    /**
     * @var bool
     */
    public $asynchronousExecution;
    /**
     * @var string
     */
    public $formDataJsonListShrink;
    /**
     * @var string
     */
    public $formUuid;
    /**
     * @var bool
     */
    public $keepRunningAfterException;
    /**
     * @var bool
     */
    public $noExecuteExpression;
    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'                   => 'AppType',
        'asynchronousExecution'     => 'AsynchronousExecution',
        'formDataJsonListShrink'    => 'FormDataJsonList',
        'formUuid'                  => 'FormUuid',
        'keepRunningAfterException' => 'KeepRunningAfterException',
        'noExecuteExpression'       => 'NoExecuteExpression',
        'systemToken'               => 'SystemToken',
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

        if (null !== $this->asynchronousExecution) {
            $res['AsynchronousExecution'] = $this->asynchronousExecution;
        }

        if (null !== $this->formDataJsonListShrink) {
            $res['FormDataJsonList'] = $this->formDataJsonListShrink;
        }

        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->keepRunningAfterException) {
            $res['KeepRunningAfterException'] = $this->keepRunningAfterException;
        }

        if (null !== $this->noExecuteExpression) {
            $res['NoExecuteExpression'] = $this->noExecuteExpression;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
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

        if (isset($map['AsynchronousExecution'])) {
            $model->asynchronousExecution = $map['AsynchronousExecution'];
        }

        if (isset($map['FormDataJsonList'])) {
            $model->formDataJsonListShrink = $map['FormDataJsonList'];
        }

        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['KeepRunningAfterException'])) {
            $model->keepRunningAfterException = $map['KeepRunningAfterException'];
        }

        if (isset($map['NoExecuteExpression'])) {
            $model->noExecuteExpression = $map['NoExecuteExpression'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
