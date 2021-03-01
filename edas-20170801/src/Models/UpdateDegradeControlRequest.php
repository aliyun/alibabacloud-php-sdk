<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateDegradeControlRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var int
     */
    public $rtThreshold;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $urlVar;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'appId'       => 'AppId',
        'ruleId'      => 'RuleId',
        'duration'    => 'Duration',
        'methodName'  => 'MethodName',
        'rtThreshold' => 'RtThreshold',
        'serviceName' => 'ServiceName',
        'urlVar'      => 'UrlVar',
        'ruleType'    => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->rtThreshold) {
            $res['RtThreshold'] = $this->rtThreshold;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->urlVar) {
            $res['UrlVar'] = $this->urlVar;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDegradeControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['RtThreshold'])) {
            $model->rtThreshold = $map['RtThreshold'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['UrlVar'])) {
            $model->urlVar = $map['UrlVar'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
