<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListClusterDeprecatedAPIResponseBody\datas;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $deprecatedK8sVersion;

    /**
     * @var string
     */
    public $ds;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $lastTime;

    /**
     * @var string
     */
    public $requestUri;

    /**
     * @var string
     */
    public $sourceIps;

    /**
     * @var string
     */
    public $targetVersion;

    /**
     * @var string
     */
    public $userAgent;
    protected $_name = [
        'clusterId'            => 'cluster_id',
        'content'              => 'content',
        'count'                => 'count',
        'currentVersion'       => 'current_version',
        'deprecatedK8sVersion' => 'deprecated_k8s_version',
        'ds'                   => 'ds',
        'label'                => 'label',
        'lastTime'             => 'last_time',
        'requestUri'           => 'request_uri',
        'sourceIps'            => 'source_ips',
        'targetVersion'        => 'target_version',
        'userAgent'            => 'user_agent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->currentVersion) {
            $res['current_version'] = $this->currentVersion;
        }
        if (null !== $this->deprecatedK8sVersion) {
            $res['deprecated_k8s_version'] = $this->deprecatedK8sVersion;
        }
        if (null !== $this->ds) {
            $res['ds'] = $this->ds;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->lastTime) {
            $res['last_time'] = $this->lastTime;
        }
        if (null !== $this->requestUri) {
            $res['request_uri'] = $this->requestUri;
        }
        if (null !== $this->sourceIps) {
            $res['source_ips'] = $this->sourceIps;
        }
        if (null !== $this->targetVersion) {
            $res['target_version'] = $this->targetVersion;
        }
        if (null !== $this->userAgent) {
            $res['user_agent'] = $this->userAgent;
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
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['current_version'])) {
            $model->currentVersion = $map['current_version'];
        }
        if (isset($map['deprecated_k8s_version'])) {
            $model->deprecatedK8sVersion = $map['deprecated_k8s_version'];
        }
        if (isset($map['ds'])) {
            $model->ds = $map['ds'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['last_time'])) {
            $model->lastTime = $map['last_time'];
        }
        if (isset($map['request_uri'])) {
            $model->requestUri = $map['request_uri'];
        }
        if (isset($map['source_ips'])) {
            $model->sourceIps = $map['source_ips'];
        }
        if (isset($map['target_version'])) {
            $model->targetVersion = $map['target_version'];
        }
        if (isset($map['user_agent'])) {
            $model->userAgent = $map['user_agent'];
        }

        return $model;
    }
}
