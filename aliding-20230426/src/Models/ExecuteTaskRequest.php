<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ExecuteTaskRequest extends Model
{
    /**
     * @example APP_PBKT0MFBEBTDO8T7SLVP
     *
     * @var string
     */
    public $appType;

    /**
     * @example http://
     *
     * @var string
     */
    public $digitalSignUrl;

    /**
     * @example {}
     *
     * @var string
     */
    public $formDataJson;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example y
     *
     * @var string
     */
    public $noExecuteExpressions;

    /**
     * @example AGREE
     *
     * @var string
     */
    public $outResult;

    /**
     * @example f30233fb-72e1-4af4-8cb8-c7e0ea9ee530
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example hexxyy
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example 12002575L
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'appType'              => 'AppType',
        'digitalSignUrl'       => 'DigitalSignUrl',
        'formDataJson'         => 'FormDataJson',
        'language'             => 'Language',
        'noExecuteExpressions' => 'NoExecuteExpressions',
        'outResult'            => 'OutResult',
        'processInstanceId'    => 'ProcessInstanceId',
        'remark'               => 'Remark',
        'systemToken'          => 'SystemToken',
        'taskId'               => 'TaskId',
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
        if (null !== $this->digitalSignUrl) {
            $res['DigitalSignUrl'] = $this->digitalSignUrl;
        }
        if (null !== $this->formDataJson) {
            $res['FormDataJson'] = $this->formDataJson;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->noExecuteExpressions) {
            $res['NoExecuteExpressions'] = $this->noExecuteExpressions;
        }
        if (null !== $this->outResult) {
            $res['OutResult'] = $this->outResult;
        }
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['DigitalSignUrl'])) {
            $model->digitalSignUrl = $map['DigitalSignUrl'];
        }
        if (isset($map['FormDataJson'])) {
            $model->formDataJson = $map['FormDataJson'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['NoExecuteExpressions'])) {
            $model->noExecuteExpressions = $map['NoExecuteExpressions'];
        }
        if (isset($map['OutResult'])) {
            $model->outResult = $map['OutResult'];
        }
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
