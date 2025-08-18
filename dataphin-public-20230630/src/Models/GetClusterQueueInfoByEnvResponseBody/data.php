<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetClusterQueueInfoByEnvResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $createAt;

    /**
     * @var string
     */
    public $flinkImageRegistry;

    /**
     * @var string
     */
    public $flinkImageRepository;

    /**
     * @var string
     */
    public $flinkImageTag;

    /**
     * @var string
     */
    public $flinkVersion;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $maxVcore;

    /**
     * @var string
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $resourceVersion;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $vvpClusterType;
    protected $_name = [
        'annotations' => 'Annotations',
        'clusterId' => 'ClusterId',
        'createAt' => 'CreateAt',
        'flinkImageRegistry' => 'FlinkImageRegistry',
        'flinkImageRepository' => 'FlinkImageRepository',
        'flinkImageTag' => 'FlinkImageTag',
        'flinkVersion' => 'FlinkVersion',
        'labels' => 'Labels',
        'maxVcore' => 'MaxVcore',
        'modifiedAt' => 'ModifiedAt',
        'namespace' => 'Namespace',
        'queueName' => 'QueueName',
        'resourceVersion' => 'ResourceVersion',
        'spec' => 'Spec',
        'vvpClusterType' => 'VvpClusterType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->createAt) {
            $res['CreateAt'] = $this->createAt;
        }

        if (null !== $this->flinkImageRegistry) {
            $res['FlinkImageRegistry'] = $this->flinkImageRegistry;
        }

        if (null !== $this->flinkImageRepository) {
            $res['FlinkImageRepository'] = $this->flinkImageRepository;
        }

        if (null !== $this->flinkImageTag) {
            $res['FlinkImageTag'] = $this->flinkImageTag;
        }

        if (null !== $this->flinkVersion) {
            $res['FlinkVersion'] = $this->flinkVersion;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->maxVcore) {
            $res['MaxVcore'] = $this->maxVcore;
        }

        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->resourceVersion) {
            $res['ResourceVersion'] = $this->resourceVersion;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->vvpClusterType) {
            $res['VvpClusterType'] = $this->vvpClusterType;
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
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CreateAt'])) {
            $model->createAt = $map['CreateAt'];
        }

        if (isset($map['FlinkImageRegistry'])) {
            $model->flinkImageRegistry = $map['FlinkImageRegistry'];
        }

        if (isset($map['FlinkImageRepository'])) {
            $model->flinkImageRepository = $map['FlinkImageRepository'];
        }

        if (isset($map['FlinkImageTag'])) {
            $model->flinkImageTag = $map['FlinkImageTag'];
        }

        if (isset($map['FlinkVersion'])) {
            $model->flinkVersion = $map['FlinkVersion'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['MaxVcore'])) {
            $model->maxVcore = $map['MaxVcore'];
        }

        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['ResourceVersion'])) {
            $model->resourceVersion = $map['ResourceVersion'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['VvpClusterType'])) {
            $model->vvpClusterType = $map['VvpClusterType'];
        }

        return $model;
    }
}
