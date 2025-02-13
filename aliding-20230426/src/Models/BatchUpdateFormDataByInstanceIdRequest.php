<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class BatchUpdateFormDataByInstanceIdRequest extends Model
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
    public $formInstanceIdList;
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
     * @var string
     */
    public $updateFormDataJson;
    /**
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
        if (\is_array($this->formInstanceIdList)) {
            Model::validateArray($this->formInstanceIdList);
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

        if (null !== $this->formInstanceIdList) {
            if (\is_array($this->formInstanceIdList)) {
                $res['FormInstanceIdList'] = [];
                $n1                        = 0;
                foreach ($this->formInstanceIdList as $item1) {
                    $res['FormInstanceIdList'][$n1++] = $item1;
                }
            }
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

        if (isset($map['FormInstanceIdList'])) {
            if (!empty($map['FormInstanceIdList'])) {
                $model->formInstanceIdList = [];
                $n1                        = 0;
                foreach ($map['FormInstanceIdList'] as $item1) {
                    $model->formInstanceIdList[$n1++] = $item1;
                }
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
