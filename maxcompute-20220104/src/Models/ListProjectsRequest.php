<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListProjectsRequest extends Model
{
    /**
     * @description Specifies whether to list the built-in **SYSTEM_CATALOG** projects that are used to provide data such as project metadata and historical usage data. For more information, see [Tenant-level Information Schema](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/tenant-level-information-schema).
     *
     * Valid values:
     *
     *   true: The built-in SYSTEM_CATALOG projects are listed.
     *   false: The built-in SYSTEM_CATALOG projects are not listed.
     *
     * @example true
     *
     * @var bool
     */
    public $listSystemCatalog;

    /**
     * @description The maximum number of entries to return on each page.
     *
     * @example cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==
     *
     * @var string
     */
    public $marker;

    /**
     * @description The maximum number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxItem;

    /**
     * @description Specifies the marker after which the returned list begins.
     *
     * @example a
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The quota name that is automatically generated. You can log on to the [MaxCompute console](https://maxcompute.console.aliyun.com), choose **Workspace** > **Quotas** from the left-side navigation pane, and then view the quota name on the **Quotas** page.
     *
     * @example "hsajkdgbkaubh"
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The quota nickname. You can log on to the [MaxCompute console](https://maxcompute.console.aliyun.com), choose **Workspace** > **Quotas** from the left-side navigation pane, and then view the quota nickname on the **Quotas** page.
     *
     * @example quotaA
     *
     * @var string
     */
    public $quotaNickName;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The instance ID and billing method of the default computing quota.
     *
     * @example "aaaa-bbbb"
     *
     * @var string
     */
    public $saleTags;

    /**
     * @description The tenant ID. You can log on to the [MaxCompute console](https://maxcompute.console.aliyun.com), and choose **Tenants** > **Tenant Property** from the left-side navigation pane to view the tenant ID.
     *
     * @example 549532154333697
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The project type. Valid values:
     *
     *   **managed**: internal project
     *   **external**: external project
     *
     * @example "managed"
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'listSystemCatalog' => 'listSystemCatalog',
        'marker' => 'marker',
        'maxItem' => 'maxItem',
        'prefix' => 'prefix',
        'quotaName' => 'quotaName',
        'quotaNickName' => 'quotaNickName',
        'region' => 'region',
        'saleTags' => 'saleTags',
        'tenantId' => 'tenantId',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->listSystemCatalog) {
            $res['listSystemCatalog'] = $this->listSystemCatalog;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->quotaName) {
            $res['quotaName'] = $this->quotaName;
        }
        if (null !== $this->quotaNickName) {
            $res['quotaNickName'] = $this->quotaNickName;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->saleTags) {
            $res['saleTags'] = $this->saleTags;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['listSystemCatalog'])) {
            $model->listSystemCatalog = $map['listSystemCatalog'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['quotaName'])) {
            $model->quotaName = $map['quotaName'];
        }
        if (isset($map['quotaNickName'])) {
            $model->quotaNickName = $map['quotaNickName'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['saleTags'])) {
            $model->saleTags = $map['saleTags'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
