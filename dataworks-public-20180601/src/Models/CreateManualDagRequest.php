<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class CreateManualDagRequest extends Model
{
    /**
     * @example 2018-12-12 00:00:00
     *
     * @var string
     */
    public $bizdate;

    /**
     * @example param_k1=param_v1 param_k2=param_v2
     *
     * @var string
     */
    public $dagPara;

    /**
     * @example test_flow
     *
     * @var string
     */
    public $flowName;

    /**
     * @example {"103180025": "test=$[yyyy-mm-dd]"}
     *
     * @var string
     */
    public $nodePara;

    /**
     * @example test_project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'bizdate'     => 'Bizdate',
        'dagPara'     => 'DagPara',
        'flowName'    => 'FlowName',
        'nodePara'    => 'NodePara',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->dagPara) {
            $res['DagPara'] = $this->dagPara;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->nodePara) {
            $res['NodePara'] = $this->nodePara;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['DagPara'])) {
            $model->dagPara = $map['DagPara'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['NodePara'])) {
            $model->nodePara = $map['NodePara'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
