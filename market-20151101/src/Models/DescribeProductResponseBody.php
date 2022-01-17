<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productExtras;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo;
use AlibabaCloud\Tea\Model;

class DescribeProductResponseBody extends Model
{
    /**
     * @var string
     */
    public $auditFailMsg;

    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $auditTime;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $frontCategoryId;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var productExtras
     */
    public $productExtras;

    /**
     * @var productSkus
     */
    public $productSkus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var shopInfo
     */
    public $shopInfo;

    /**
     * @var string
     */
    public $shortDescription;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $supplierPk;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $useCount;
    protected $_name = [
        'auditFailMsg'     => 'AuditFailMsg',
        'auditStatus'      => 'AuditStatus',
        'auditTime'        => 'AuditTime',
        'code'             => 'Code',
        'description'      => 'Description',
        'frontCategoryId'  => 'FrontCategoryId',
        'gmtCreated'       => 'GmtCreated',
        'gmtModified'      => 'GmtModified',
        'name'             => 'Name',
        'picUrl'           => 'PicUrl',
        'productExtras'    => 'ProductExtras',
        'productSkus'      => 'ProductSkus',
        'requestId'        => 'RequestId',
        'score'            => 'Score',
        'shopInfo'         => 'ShopInfo',
        'shortDescription' => 'ShortDescription',
        'status'           => 'Status',
        'supplierPk'       => 'SupplierPk',
        'type'             => 'Type',
        'useCount'         => 'UseCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditFailMsg) {
            $res['AuditFailMsg'] = $this->auditFailMsg;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->frontCategoryId) {
            $res['FrontCategoryId'] = $this->frontCategoryId;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->productExtras) {
            $res['ProductExtras'] = null !== $this->productExtras ? $this->productExtras->toMap() : null;
        }
        if (null !== $this->productSkus) {
            $res['ProductSkus'] = null !== $this->productSkus ? $this->productSkus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->shopInfo) {
            $res['ShopInfo'] = null !== $this->shopInfo ? $this->shopInfo->toMap() : null;
        }
        if (null !== $this->shortDescription) {
            $res['ShortDescription'] = $this->shortDescription;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplierPk) {
            $res['SupplierPk'] = $this->supplierPk;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->useCount) {
            $res['UseCount'] = $this->useCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditFailMsg'])) {
            $model->auditFailMsg = $map['AuditFailMsg'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FrontCategoryId'])) {
            $model->frontCategoryId = $map['FrontCategoryId'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['ProductExtras'])) {
            $model->productExtras = productExtras::fromMap($map['ProductExtras']);
        }
        if (isset($map['ProductSkus'])) {
            $model->productSkus = productSkus::fromMap($map['ProductSkus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ShopInfo'])) {
            $model->shopInfo = shopInfo::fromMap($map['ShopInfo']);
        }
        if (isset($map['ShortDescription'])) {
            $model->shortDescription = $map['ShortDescription'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierPk'])) {
            $model->supplierPk = $map['SupplierPk'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UseCount'])) {
            $model->useCount = $map['UseCount'];
        }

        return $model;
    }
}
