<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $hostMachine;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $pipelineId;

    /**
     * @var int
     */
    public $submitId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'hostMachine' => 'HostMachine',
        'nodeId' => 'NodeId',
        'pipelineId' => 'PipelineId',
        'submitId' => 'SubmitId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostMachine) {
            $res['HostMachine'] = $this->hostMachine;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['HostMachine'])) {
            $model->hostMachine = $map['HostMachine'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
