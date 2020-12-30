<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenarioTemplatesResponseBody\scenarioTemplates;
use AlibabaCloud\Tea\Model;

class ListScenarioTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var scenarioTemplates[]
     */
    public $scenarioTemplates;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'httpStatusCode'    => 'HttpStatusCode',
        'scenarioTemplates' => 'ScenarioTemplates',
        'code'              => 'Code',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->scenarioTemplates) {
            $res['ScenarioTemplates'] = [];
            if (null !== $this->scenarioTemplates && \is_array($this->scenarioTemplates)) {
                $n = 0;
                foreach ($this->scenarioTemplates as $item) {
                    $res['ScenarioTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScenarioTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['ScenarioTemplates'])) {
            if (!empty($map['ScenarioTemplates'])) {
                $model->scenarioTemplates = [];
                $n                        = 0;
                foreach ($map['ScenarioTemplates'] as $item) {
                    $model->scenarioTemplates[$n++] = null !== $item ? scenarioTemplates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
