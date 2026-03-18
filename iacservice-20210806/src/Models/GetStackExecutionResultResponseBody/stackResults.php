<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackExecutionResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackExecutionResultResponseBody\stackResults\deployments;

class stackResults extends Model
{
    /**
     * @var deployments[]
     */
    public $deployments;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $stackStatus;
    protected $_name = [
        'deployments' => 'deployments',
        'message' => 'message',
        'stackId' => 'stackId',
        'stackName' => 'stackName',
        'stackStatus' => 'stackStatus',
    ];

    public function validate()
    {
        if (\is_array($this->deployments)) {
            Model::validateArray($this->deployments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployments) {
            if (\is_array($this->deployments)) {
                $res['deployments'] = [];
                $n1 = 0;
                foreach ($this->deployments as $item1) {
                    $res['deployments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->stackId) {
            $res['stackId'] = $this->stackId;
        }

        if (null !== $this->stackName) {
            $res['stackName'] = $this->stackName;
        }

        if (null !== $this->stackStatus) {
            $res['stackStatus'] = $this->stackStatus;
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
        if (isset($map['deployments'])) {
            if (!empty($map['deployments'])) {
                $model->deployments = [];
                $n1 = 0;
                foreach ($map['deployments'] as $item1) {
                    $model->deployments[$n1] = deployments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['stackId'])) {
            $model->stackId = $map['stackId'];
        }

        if (isset($map['stackName'])) {
            $model->stackName = $map['stackName'];
        }

        if (isset($map['stackStatus'])) {
            $model->stackStatus = $map['stackStatus'];
        }

        return $model;
    }
}
