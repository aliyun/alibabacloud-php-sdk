<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class MergeFigureClustersRequest extends Model
{
    /**
     * @var string
     */
    public $clusterIdFrom;

    /**
     * @var string
     */
    public $clusterIdTo;

    /**
     * @var string
     */
    public $customMessage;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $figureType;

    /**
     * @var string
     */
    public $notifyTopicEndpoint;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'clusterIdFrom'       => 'ClusterIdFrom',
        'clusterIdTo'         => 'ClusterIdTo',
        'customMessage'       => 'CustomMessage',
        'datasetName'         => 'DatasetName',
        'figureType'          => 'FigureType',
        'notifyTopicEndpoint' => 'NotifyTopicEndpoint',
        'notifyTopicName'     => 'NotifyTopicName',
        'projectName'         => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIdFrom) {
            $res['ClusterIdFrom'] = $this->clusterIdFrom;
        }
        if (null !== $this->clusterIdTo) {
            $res['ClusterIdTo'] = $this->clusterIdTo;
        }
        if (null !== $this->customMessage) {
            $res['CustomMessage'] = $this->customMessage;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->figureType) {
            $res['FigureType'] = $this->figureType;
        }
        if (null !== $this->notifyTopicEndpoint) {
            $res['NotifyTopicEndpoint'] = $this->notifyTopicEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeFigureClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIdFrom'])) {
            $model->clusterIdFrom = $map['ClusterIdFrom'];
        }
        if (isset($map['ClusterIdTo'])) {
            $model->clusterIdTo = $map['ClusterIdTo'];
        }
        if (isset($map['CustomMessage'])) {
            $model->customMessage = $map['CustomMessage'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['FigureType'])) {
            $model->figureType = $map['FigureType'];
        }
        if (isset($map['NotifyTopicEndpoint'])) {
            $model->notifyTopicEndpoint = $map['NotifyTopicEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
