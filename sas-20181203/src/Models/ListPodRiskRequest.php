<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListPodRiskRequest extends Model
{
    /**
     * @description The name of the application.
     *
     * @example nginx1
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the container cluster.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~182997~~) operation to query the IDs of container clusters.
     * @example c314aa5b2f208461dad821cdfed82****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example taas
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the pod.
     *
     * @example abcd-84898334227-p****
     *
     * @var string
     */
    public $podName;
    protected $_name = [
        'appName'     => 'AppName',
        'clusterId'   => 'ClusterId',
        'currentPage' => 'CurrentPage',
        'namespace'   => 'Namespace',
        'pageSize'    => 'PageSize',
        'podName'     => 'PodName',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPodRiskRequest
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}
