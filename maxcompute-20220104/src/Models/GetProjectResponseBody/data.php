<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\ipWhiteList;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\saleTag;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\securityProperties;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The project description.
     *
     * @example maxcompute project
     *
     * @var string
     */
    public $comment;

    /**
     * @description The total storage usage. The storage space that is occupied by your project, which is the logical storage space after your project data is collected and compressed.
     *
     * @example 16489027
     *
     * @var string
     */
    public $costStorage;

    /**
     * @description The creation time.
     *
     * @example 1704380838000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The default computing quota that is used to allocate computing resources. If you do not specify a computing quota for your project, the jobs that are initiated by your project consume the computing resources in the default quota. For more information about how to use computing resources, see [Use quota groups for computing resources](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/use-of-computing-resources).
     *
     * @example quota_a
     *
     * @var string
     */
    public $defaultQuota;

    /**
     * @description The information about the IP address whitelist.
     *
     * @var ipWhiteList
     */
    public $ipWhiteList;

    /**
     * @description The project name.
     *
     * @example odps_project
     *
     * @var string
     */
    public $name;

    /**
     * @description The account information of the project owner.
     *
     * @example 1565950907343451
     *
     * @var string
     */
    public $owner;

    /**
     * @description The billing method of the default computing quota.
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $productType;

    /**
     * @description The basic properties of the project.
     *
     * @var properties
     */
    public $properties;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instance ID and billing method of the default computing quota.
     *
     * @var saleTag
     */
    public $saleTag;

    /**
     * @description The permission properties.
     *
     * @var securityProperties
     */
    public $securityProperties;

    /**
     * @description The project status. Valid values:
     *
     *   **AVAILABLE**
     *   **READONLY**
     *   **FROZEN**
     *   **DELETING**
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of `Super_Administrator` role members of the project.
     *
     * @var string[]
     */
    public $superAdmins;

    /**
     * @description Indicates whether data storage by schema is supported. MaxCompute supports the schema feature. This feature allows you to classify objects such as tables, resources, and user-defined functions (UDFs) in a project by schema. You can create multiple schemas in a project. For more information, see [Schema-related operations](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/schema-related-operations).
     *
     * @example true
     *
     * @var bool
     */
    public $threeTierModel;

    /**
     * @description The project type. Valid values:
     *
     *   **managed**: internal project
     *   **external**: external project
     *
     * @example managed
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'comment',
        'costStorage' => 'costStorage',
        'createdTime' => 'createdTime',
        'defaultQuota' => 'defaultQuota',
        'ipWhiteList' => 'ipWhiteList',
        'name' => 'name',
        'owner' => 'owner',
        'productType' => 'productType',
        'properties' => 'properties',
        'regionId' => 'regionId',
        'saleTag' => 'saleTag',
        'securityProperties' => 'securityProperties',
        'status' => 'status',
        'superAdmins' => 'superAdmins',
        'threeTierModel' => 'threeTierModel',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->costStorage) {
            $res['costStorage'] = $this->costStorage;
        }
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->defaultQuota) {
            $res['defaultQuota'] = $this->defaultQuota;
        }
        if (null !== $this->ipWhiteList) {
            $res['ipWhiteList'] = null !== $this->ipWhiteList ? $this->ipWhiteList->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
        }
        if (null !== $this->properties) {
            $res['properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->saleTag) {
            $res['saleTag'] = null !== $this->saleTag ? $this->saleTag->toMap() : null;
        }
        if (null !== $this->securityProperties) {
            $res['securityProperties'] = null !== $this->securityProperties ? $this->securityProperties->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->superAdmins) {
            $res['superAdmins'] = $this->superAdmins;
        }
        if (null !== $this->threeTierModel) {
            $res['threeTierModel'] = $this->threeTierModel;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['costStorage'])) {
            $model->costStorage = $map['costStorage'];
        }
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['defaultQuota'])) {
            $model->defaultQuota = $map['defaultQuota'];
        }
        if (isset($map['ipWhiteList'])) {
            $model->ipWhiteList = ipWhiteList::fromMap($map['ipWhiteList']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }
        if (isset($map['properties'])) {
            $model->properties = properties::fromMap($map['properties']);
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['saleTag'])) {
            $model->saleTag = saleTag::fromMap($map['saleTag']);
        }
        if (isset($map['securityProperties'])) {
            $model->securityProperties = securityProperties::fromMap($map['securityProperties']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['superAdmins'])) {
            if (!empty($map['superAdmins'])) {
                $model->superAdmins = $map['superAdmins'];
            }
        }
        if (isset($map['threeTierModel'])) {
            $model->threeTierModel = $map['threeTierModel'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
