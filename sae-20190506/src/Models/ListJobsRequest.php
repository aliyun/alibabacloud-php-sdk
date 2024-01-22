<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListJobsRequest extends Model
{
    /**
     * @description The name of the job template.
     *
     * @example demo-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The number of the page to return. The parameter value is a positive integer that is greater than or equal to 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The dimension by which applications are filtered. Valid values:
     *
     *   **appName**: Applications are filtered by job template name.
     *   **appIds**: Applications are filtered by job template ID.
     *
     * @example appName
     *
     * @var string
     */
    public $fieldType;

    /**
     * @description Enter the name and ID of the job template.
     *
     * @example demo-app
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The namespace ID.
     *
     * @example cn-beijing:demo
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description Specifies how applications are sorted. Valid values:
     *
     *   **running**: The applications are sorted based on the number of running instances.
     *   **instances**: The applications are sorted based on the number of destination instances.
     *
     * @example running
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of entries to return on each page. Valid value: 0 to 200.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether to sort the field names that are passed by **OrderBy** in ascending order. Valid values:
     *
     *   **true**: in ascending order
     *   **false**: in descending order
     *
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The tags that are displayed in a JSON string. Valid values:
     *
     *   **key**: the tag key
     *   **value**: the tag value
     *
     * @example [{"key":"key","value":"value"}]
     *
     * @var string
     */
    public $tags;

    /**
     * @description Set the value to `job`.
     *
     * @example job
     *
     * @var string
     */
    public $workload;
    protected $_name = [
        'appName'     => 'AppName',
        'currentPage' => 'CurrentPage',
        'fieldType'   => 'FieldType',
        'fieldValue'  => 'FieldValue',
        'namespaceId' => 'NamespaceId',
        'orderBy'     => 'OrderBy',
        'pageSize'    => 'PageSize',
        'reverse'     => 'Reverse',
        'tags'        => 'Tags',
        'workload'    => 'Workload',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->fieldType) {
            $res['FieldType'] = $this->fieldType;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->workload) {
            $res['Workload'] = $this->workload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FieldType'])) {
            $model->fieldType = $map['FieldType'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Workload'])) {
            $model->workload = $map['Workload'];
        }

        return $model;
    }
}
