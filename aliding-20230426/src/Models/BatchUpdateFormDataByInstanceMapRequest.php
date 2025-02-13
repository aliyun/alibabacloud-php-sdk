<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class BatchUpdateFormDataByInstanceMapRequest extends Model
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
    public $formUuid;
    /**
     * @var bool
     */
    public $ignoreEmpty;
    /**
     * @var bool
     */
    public $noExecuteExpression;
    /**
     * @var string
     */
    public $systemToken;
    /**
     * @var mixed[]
     */
    public $updateFormDataJsonMap;
    /**
     * @var bool
     */
    public $useLatestFormSchemaVersion;
    protected $_name = [
        'appType'                    => 'AppType',
        'asynchronousExecution'      => 'AsynchronousExecution',
        'formUuid'                   => 'FormUuid',
        'ignoreEmpty'                => 'IgnoreEmpty',
        'noExecuteExpression'        => 'NoExecuteExpression',
        'systemToken'                => 'SystemToken',
        'updateFormDataJsonMap'      => 'UpdateFormDataJsonMap',
        'useLatestFormSchemaVersion' => 'UseLatestFormSchemaVersion',
    ];

    public function validate()
    {
        if (\is_array($this->updateFormDataJsonMap)) {
            Model::validateArray($this->updateFormDataJsonMap);
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

        if (null !== $this->updateFormDataJsonMap) {
            if (\is_array($this->updateFormDataJsonMap)) {
                $res['UpdateFormDataJsonMap'] = [];
                foreach ($this->updateFormDataJsonMap as $key1 => $value1) {
                    $res['UpdateFormDataJsonMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->useLatestFormSchemaVersion) {
            $res['UseLatestFormSchemaVersion'] = $this->useLatestFormSchemaVersion;
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

        if (isset($map['UpdateFormDataJsonMap'])) {
            if (!empty($map['UpdateFormDataJsonMap'])) {
                $model->updateFormDataJsonMap = [];
                foreach ($map['UpdateFormDataJsonMap'] as $key1 => $value1) {
                    $model->updateFormDataJsonMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['UseLatestFormSchemaVersion'])) {
            $model->useLatestFormSchemaVersion = $map['UseLatestFormSchemaVersion'];
        }

        return $model;
    }
}
