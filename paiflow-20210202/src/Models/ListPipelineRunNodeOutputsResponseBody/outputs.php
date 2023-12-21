<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeOutputsResponseBody;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @example inputArtifact
     *
     * @var string
     */
    public $expandableArtifactName;

    /**
     * @example 0
     *
     * @var int
     */
    public $expandedArtifactIndex;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example artifact-ty1xwv*******s8zf
     *
     * @var string
     */
    public $id;

    /**
     * @example {         "metadata": {           "type": {             "Model": {               "locationType": "MaxComputeOfflineModel",               "modelType": "OfflineModel"             }           }         }
     *
     * @var mixed[]
     */
    public $info;

    /**
     * @example model_******
     *
     * @var string
     */
    public $name;

    /**
     * @example node-obpzu*******418grb7
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example id-3d25-************-77856
     *
     * @var string
     */
    public $producer;

    /**
     * @example Model
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'expandableArtifactName' => 'ExpandableArtifactName',
        'expandedArtifactIndex'  => 'ExpandedArtifactIndex',
        'gmtCreateTime'          => 'GmtCreateTime',
        'id'                     => 'Id',
        'info'                   => 'Info',
        'name'                   => 'Name',
        'nodeId'                 => 'NodeId',
        'producer'               => 'Producer',
        'type'                   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expandableArtifactName) {
            $res['ExpandableArtifactName'] = $this->expandableArtifactName;
        }
        if (null !== $this->expandedArtifactIndex) {
            $res['ExpandedArtifactIndex'] = $this->expandedArtifactIndex;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->producer) {
            $res['Producer'] = $this->producer;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpandableArtifactName'])) {
            $model->expandableArtifactName = $map['ExpandableArtifactName'];
        }
        if (isset($map['ExpandedArtifactIndex'])) {
            $model->expandedArtifactIndex = $map['ExpandedArtifactIndex'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Producer'])) {
            $model->producer = $map['Producer'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
