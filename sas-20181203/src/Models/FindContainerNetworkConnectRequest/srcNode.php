<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectRequest;

use AlibabaCloud\Tea\Model;

class srcNode extends Model
{
    /**
     * @example arms-prometheus-ack-arms-prometheus
     *
     * @var string
     */
    public $appName;

    /**
     * @example c56xxx1775dea0
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @var string[]
     */
    public $nodeIds;

    /**
     * @example app
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example abc-deployment-yacs-31144-39265-1384966-7f8c8cd578-h6mhb
     *
     * @var string
     */
    public $podName;
    protected $_name = [
        'appName'   => 'AppName',
        'clusterId' => 'ClusterId',
        'namespace' => 'Namespace',
        'nodeIds'   => 'NodeIds',
        'nodeType'  => 'NodeType',
        'podName'   => 'PodName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return srcNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}
