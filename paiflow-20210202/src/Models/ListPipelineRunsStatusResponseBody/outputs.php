<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusResponseBody;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @var string
     */
    public $expandableArtifactName;

    /**
     * @var int
     */
    public $expandedArtifactIndex;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $pipelineRunId;

    /**
     * @var string
     */
    public $producer;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'expandableArtifactName' => 'ExpandableArtifactName',
        'expandedArtifactIndex'  => 'ExpandedArtifactIndex',
        'gmtCreateTime'          => 'GmtCreateTime',
        'id'                     => 'Id',
        'metadata'               => 'Metadata',
        'name'                   => 'Name',
        'nodeId'                 => 'NodeId',
        'pipelineRunId'          => 'PipelineRunId',
        'producer'               => 'Producer',
        'type'                   => 'Type',
        'value'                  => 'Value',
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
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }
        if (null !== $this->producer) {
            $res['Producer'] = $this->producer;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }
        if (isset($map['Producer'])) {
            $model->producer = $map['Producer'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
