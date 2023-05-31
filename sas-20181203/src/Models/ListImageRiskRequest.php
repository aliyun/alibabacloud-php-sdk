<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListImageRiskRequest extends Model
{
    /**
     * @description The name of the application.
     *
     * @example e****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the container cluster.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the ID of the container cluster.
     * @example c80f79959fd724a888e1187779b13****
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
     * @description The name of the image.
     *
     * @example container-***:****
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The name of the namespace to which the repository belongs.
     *
     * @example kube-sy****
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
    protected $_name = [
        'appName'     => 'AppName',
        'clusterId'   => 'ClusterId',
        'currentPage' => 'CurrentPage',
        'imageName'   => 'ImageName',
        'namespace'   => 'Namespace',
        'pageSize'    => 'PageSize',
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
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImageRiskRequest
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
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
