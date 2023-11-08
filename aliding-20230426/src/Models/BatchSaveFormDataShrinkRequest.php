<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class BatchSaveFormDataShrinkRequest extends Model
{
    /**
     * @example APP_XCE0EVXS6DYG3YDYC5RD
     *
     * @var string
     */
    public $appType;

    /**
     * @example false
     *
     * @var bool
     */
    public $asynchronousExecution;

    /**
     * @var string
     */
    public $formDataJsonListShrink;

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
    public $keepRunningAfterException;

    /**
     * @example false
     *
     * @var bool
     */
    public $noExecuteExpression;

    /**
     * @example 09866181UTZVVD4R3DC955FNKIM52HVPU5WWK7
     *
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

    /**
     * @param array $map
     *
     * @return BatchSaveFormDataShrinkRequest
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
