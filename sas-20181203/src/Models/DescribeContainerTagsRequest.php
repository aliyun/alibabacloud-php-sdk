<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerTagsRequest extends Model
{
    /**
     * @description The name of the application.
     *
     * @example node-exporter
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the cluster to which the container belongs.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of clusters.
     * @example c22143730ab6e40b09ec7c1c51d4d****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the attribute that is used for the query. Valid values:
     *
     *   **namespace**: the namespace
     *   **appName**: the application name
     *   **image**: the image
     *   **tag**: the tag
     *
     * @example namespace
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The value of the attribute that is used for the query.
     *
     * @example demo4
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The namespace.
     *
     * @example test-name-01
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of entries to return on each page. Default value: 200.
     *
     * @example 200
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appName'     => 'AppName',
        'clusterId'   => 'ClusterId',
        'currentPage' => 'CurrentPage',
        'fieldName'   => 'FieldName',
        'fieldValue'  => 'FieldValue',
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
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
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
     * @return DescribeContainerTagsRequest
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
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
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
