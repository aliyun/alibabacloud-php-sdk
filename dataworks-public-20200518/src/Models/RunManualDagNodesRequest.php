<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunManualDagNodesRequest extends Model
{
    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $nodeParameters;

    /**
     * @var string
     */
    public $dagParameters;
    protected $_name = [
        'projectEnv'     => 'ProjectEnv',
        'projectName'    => 'ProjectName',
        'flowName'       => 'FlowName',
        'bizDate'        => 'BizDate',
        'nodeParameters' => 'NodeParameters',
        'dagParameters'  => 'DagParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->nodeParameters) {
            $res['NodeParameters'] = $this->nodeParameters;
        }
        if (null !== $this->dagParameters) {
            $res['DagParameters'] = $this->dagParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunManualDagNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['NodeParameters'])) {
            $model->nodeParameters = $map['NodeParameters'];
        }
        if (isset($map['DagParameters'])) {
            $model->dagParameters = $map['DagParameters'];
        }

        return $model;
    }
}
