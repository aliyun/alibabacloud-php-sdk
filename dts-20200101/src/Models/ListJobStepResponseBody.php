<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListJobStepResponseBody\jobSteps;

class ListJobStepResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var jobSteps[]
     */
    public $jobSteps;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var bool
     */
    public $useV2API;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'jobSteps' => 'JobSteps',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'useV2API' => 'UseV2API',
    ];

    public function validate()
    {
        if (\is_array($this->jobSteps)) {
            Model::validateArray($this->jobSteps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->jobSteps) {
            if (\is_array($this->jobSteps)) {
                $res['JobSteps'] = [];
                $n1 = 0;
                foreach ($this->jobSteps as $item1) {
                    $res['JobSteps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->useV2API) {
            $res['UseV2API'] = $this->useV2API;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['JobSteps'])) {
            if (!empty($map['JobSteps'])) {
                $model->jobSteps = [];
                $n1 = 0;
                foreach ($map['JobSteps'] as $item1) {
                    $model->jobSteps[$n1] = jobSteps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['UseV2API'])) {
            $model->useV2API = $map['UseV2API'];
        }

        return $model;
    }
}
