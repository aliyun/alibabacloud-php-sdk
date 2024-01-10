<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetDiagnosticResponseBody;

use AlibabaCloud\Tea\Model;

class diagnosticResult extends Model
{
    /**
     * @description The resources that failed to be diagnosed.
     *
     * @var mixed[]
     */
    public $failedResources;

    /**
     * @description The information about Resource Orchestration Service (ROS) calling.
     *
     * @var mixed[]
     */
    public $rosActionMessages;

    /**
     * @description The stack information.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedResources) {
            $res['FailedResources'] = $this->failedResources;
        }
        if (null !== $this->rosActionMessages) {
            $res['RosActionMessages'] = $this->rosActionMessages;
        }
        if (null !== $this->stackMessages) {
            $res['StackMessages'] = $this->stackMessages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnosticResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedResources'])) {
            $model->failedResources = $map['FailedResources'];
        }
        if (isset($map['RosActionMessages'])) {
            $model->rosActionMessages = $map['RosActionMessages'];
        }
        if (isset($map['StackMessages'])) {
            $model->stackMessages = $map['StackMessages'];
        }

        return $model;
    }
}
