<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @description The application name.
     *
     * @example demo-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The SAE application type. Valid values:
     *
     * - **micro_service**
     * - **web**
     * - **job**
     *
     * @example micro_service
     *
     * @var string
     */
    public $appSource;

    /**
     * @description The current page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Set the filtering criteria for applications. The value options are as follows:
     *
     * - appName: Application name.
     * - appIds: Application IDs.
     * - slbIps: SLB IP addresses.
     * - instanceIps: Instance IP addresses.
     *
     * @example appName
     *
     * @var string
     */
    public $fieldType;

    /**
     * @description The name, ID, SLB IP, or instance IP of the target application.
     *
     * @example demo-app
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @var string
     */
    public $isStateful;

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
     * @description The number of records in each page. Value range: [0,10000]
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Sort by the running status of application instances. If the statuses are the same, sort by instance ID. The value options are as follows:
     *
     * - true: Sort in ascending order. Instances are arranged according to the startup process, for example: to ultimately reach the running state, an instance must first go through steps such as starting containers, pulling images, and initializing the instance.
     * - false: Sort in descending order.
     *
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The tag in the format of a key-value pair.
     *   **key**: the tag key. It cannot exceed 128 characters in length.
     *   **value**: the tag value. It cannot exceed 128 characters in length.
     *
     * Tag keys and tag values are case-sensitive. If you specify multiple tags, the system adds all the tags to the specified resources. Each tag key on a resource can have only one tag value. If you create a tag that has the same key as an existing tag, the value of the existing tag is overwritten.
     *
     * Tag keys and tag values cannot start with `aliyun` or `acs:`, and cannot contain `http://` or `https://`.
     *
     * @example [{"key":"key","value":"value"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'appName' => 'AppName',
        'appSource' => 'AppSource',
        'currentPage' => 'CurrentPage',
        'fieldType' => 'FieldType',
        'fieldValue' => 'FieldValue',
        'isStateful' => 'IsStateful',
        'namespaceId' => 'NamespaceId',
        'orderBy' => 'OrderBy',
        'pageSize' => 'PageSize',
        'reverse' => 'Reverse',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appSource) {
            $res['AppSource'] = $this->appSource;
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
        if (null !== $this->isStateful) {
            $res['IsStateful'] = $this->isStateful;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppSource'])) {
            $model->appSource = $map['AppSource'];
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
        if (isset($map['IsStateful'])) {
            $model->isStateful = $map['IsStateful'];
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

        return $model;
    }
}
