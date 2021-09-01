<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateManualDagRequest extends Model
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

    /**
     * @var string
     */
    public $includeNodeIds;

    /**
     * @var string
     */
    public $excludeNodeIds;
    protected $_name = [
        'projectEnv'     => 'ProjectEnv',
        'projectName'    => 'ProjectName',
        'flowName'       => 'FlowName',
        'bizDate'        => 'BizDate',
        'nodeParameters' => 'NodeParameters',
        'dagParameters'  => 'DagParameters',
        'includeNodeIds' => 'IncludeNodeIds',
        'excludeNodeIds' => 'ExcludeNodeIds',
    ];

    public function validate()
    {
        Model::validateRequired('projectEnv', $this->projectEnv, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('flowName', $this->flowName, true);
        Model::validateRequired('bizDate', $this->bizDate, true);
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
        if (null !== $this->includeNodeIds) {
            $res['IncludeNodeIds'] = $this->includeNodeIds;
        }
        if (null !== $this->excludeNodeIds) {
            $res['ExcludeNodeIds'] = $this->excludeNodeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateManualDagRequest
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
        if (isset($map['IncludeNodeIds'])) {
            $model->includeNodeIds = $map['IncludeNodeIds'];
        }
        if (isset($map['ExcludeNodeIds'])) {
            $model->excludeNodeIds = $map['ExcludeNodeIds'];
        }

        return $model;
    }
}
