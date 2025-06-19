<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class BatchSaveFormDataRequest extends Model
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
     * @var string[]
     */
    public $formDataJsonList;

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
        'appType' => 'AppType',
        'asynchronousExecution' => 'AsynchronousExecution',
        'formDataJsonList' => 'FormDataJsonList',
        'formUuid' => 'FormUuid',
        'keepRunningAfterException' => 'KeepRunningAfterException',
        'noExecuteExpression' => 'NoExecuteExpression',
        'systemToken' => 'SystemToken',
    ];

    public function validate()
    {
        if (\is_array($this->formDataJsonList)) {
            Model::validateArray($this->formDataJsonList);
        }
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

        if (null !== $this->formDataJsonList) {
            if (\is_array($this->formDataJsonList)) {
                $res['FormDataJsonList'] = [];
                $n1 = 0;
                foreach ($this->formDataJsonList as $item1) {
                    $res['FormDataJsonList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['FormDataJsonList'])) {
                $model->formDataJsonList = [];
                $n1 = 0;
                foreach ($map['FormDataJsonList'] as $item1) {
                    $model->formDataJsonList[$n1] = $item1;
                    ++$n1;
                }
            }
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
