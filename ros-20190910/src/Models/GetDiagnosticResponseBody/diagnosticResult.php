<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetDiagnosticResponseBody;

use AlibabaCloud\Dara\Model;

class diagnosticResult extends Model
{
    /**
     * @var mixed[]
     */
    public $failedResources;
    /**
     * @var mixed[]
     */
    public $rosActionMessages;
    /**
     * @var mixed[]
     */
    public $stackMessages;
    protected $_name = [
        'failedResources'   => 'FailedResources',
        'rosActionMessages' => 'RosActionMessages',
        'stackMessages'     => 'StackMessages',
    ];

    public function validate()
    {
        if (\is_array($this->failedResources)) {
            Model::validateArray($this->failedResources);
        }
        if (\is_array($this->rosActionMessages)) {
            Model::validateArray($this->rosActionMessages);
        }
        if (\is_array($this->stackMessages)) {
            Model::validateArray($this->stackMessages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedResources) {
            if (\is_array($this->failedResources)) {
                $res['FailedResources'] = [];
                foreach ($this->failedResources as $key1 => $value1) {
                    $res['FailedResources'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->rosActionMessages) {
            if (\is_array($this->rosActionMessages)) {
                $res['RosActionMessages'] = [];
                foreach ($this->rosActionMessages as $key1 => $value1) {
                    $res['RosActionMessages'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->stackMessages) {
            if (\is_array($this->stackMessages)) {
                $res['StackMessages'] = [];
                foreach ($this->stackMessages as $key1 => $value1) {
                    $res['StackMessages'][$key1] = $value1;
                }
            }
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
        if (isset($map['FailedResources'])) {
            if (!empty($map['FailedResources'])) {
                $model->failedResources = [];
                foreach ($map['FailedResources'] as $key1 => $value1) {
                    $model->failedResources[$key1] = $value1;
                }
            }
        }

        if (isset($map['RosActionMessages'])) {
            if (!empty($map['RosActionMessages'])) {
                $model->rosActionMessages = [];
                foreach ($map['RosActionMessages'] as $key1 => $value1) {
                    $model->rosActionMessages[$key1] = $value1;
                }
            }
        }

        if (isset($map['StackMessages'])) {
            if (!empty($map['StackMessages'])) {
                $model->stackMessages = [];
                foreach ($map['StackMessages'] as $key1 => $value1) {
                    $model->stackMessages[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
