<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListProjectsRequest extends Model
{
    /**
     * @description Specifies whether to list a project named SystemCatalog.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
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
     * @description The maximum number of entries returned per page.
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
     * @description The name of the quota. The value of this parameter is the identifier of the quota in MaxCompute, which differs from the quotaNickname parameter. You can configure the quotaNickname parameter. The system automatically generates a value for the quotaName parameter. This parameter is only used to describe the tunnel quota.
     *
     * @example "hsajkdgbkaubh"
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The name of the quota.
     *
     * @example quotaA
     *
     * @var string
     */
    public $quotaNickName;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The identifier of an object in a MaxCompute quota. This identifier is the same as the identifier in the sales bill of Alibaba Cloud. This parameter is used for tags.
     *
     * @example "aaaa-bbbb"
     *
     * @var string
     */
    public $saleTags;

    /**
     * @description The tenant ID.
     *
     * @example 549532154333697
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The project type. Valid values: external and managed. The value external indicates an external project, which is used in the data lakehouse solution. The value managed indicates an internal project.
     *
     * @example "managed"
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'listSystemCatalog' => 'listSystemCatalog',
        'marker'            => 'marker',
        'maxItem'           => 'maxItem',
        'prefix'            => 'prefix',
        'quotaName'         => 'quotaName',
        'quotaNickName'     => 'quotaNickName',
        'region'            => 'region',
        'saleTags'          => 'saleTags',
        'tenantId'          => 'tenantId',
        'type'              => 'type',
    ];

    public function validate()
    {
    }

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
