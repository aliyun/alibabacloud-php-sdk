<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetClusterQueueInfoByEnvResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {  "creator": "new_datasource@test.aliyunid.com",  "modifier": "new_datasource@test.aliyunid.com" }
     *
     * @var string
     */
    public $annotations;

    /**
     * @example 61187014-a3ba-4cdd-8609-1f0aa3df4a3d
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 2024-10-31 10:29:17
     *
     * @var string
     */
    public $createAt;

    /**
     * @example xxxx-registry-vpc.cn-shanghai.cr.aliyuncs.com/xxxx/flink:1.15.4-scala_2.12
     *
     * @var string
     */
    public $flinkImageRegistry;

    /**
     * @example xxxx-registry-vpc.cn-shanghai.cr.aliyuncs.com
     *
     * @var string
     */
    public $flinkImageRepository;

    /**
     * @example 1.15.4
     *
     * @var string
     */
    public $flinkImageTag;

    /**
     * @example 1.15
     *
     * @var string
     */
    public $flinkVersion;

    /**
     * @example cdh
     *
     * @var string
     */
    public $labels;

    /**
     * @example 10
     *
     * @var string
     */
    public $maxVcore;

    /**
     * @example 2024-10-31 10:29:17
     *
     * @var string
     */
    public $modifiedAt;

    /**
     * @example dataphinv45prod
     *
     * @var string
     */
    public $namespace;

    /**
     * @example default-queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @example 1
     *
     * @var string
     */
    public $resourceVersion;

    /**
     * @example {\\n  \\"kind\\" : \\"kubernetes\\",\\n  \\"kubernetes\\{"namespace" : "n1730341728989z7",    "clusterName" : "a51578bdcce145"  },  "state" : "ONLINE"}
     *
     * @var string
     */
    public $spec;

    /**
     * @example PREJOB
     *
     * @var string
     */
    public $vvpClusterType;
    protected $_name = [
        'annotations'          => 'Annotations',
        'clusterId'            => 'ClusterId',
        'createAt'             => 'CreateAt',
        'flinkImageRegistry'   => 'FlinkImageRegistry',
        'flinkImageRepository' => 'FlinkImageRepository',
        'flinkImageTag'        => 'FlinkImageTag',
        'flinkVersion'         => 'FlinkVersion',
        'labels'               => 'Labels',
        'maxVcore'             => 'MaxVcore',
        'modifiedAt'           => 'ModifiedAt',
        'namespace'            => 'Namespace',
        'queueName'            => 'QueueName',
        'resourceVersion'      => 'ResourceVersion',
        'spec'                 => 'Spec',
        'vvpClusterType'       => 'VvpClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
