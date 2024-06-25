<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySendStatisticsRequest extends Model
{
    /**
     * @description The end of the time range to query. Format: yyyyMMdd. Example: 20181225.
     *
     * This parameter is required.
     * @example 20201003
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The site from where the message is sent. Valid values:
     *
     *   **1**: China site
     *   **2**: international site
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $isGlobe;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: **1**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries to return on each page. Valid values: **1 to 50**.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The signature.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $signName;

    /**
     * @description The beginning of the time range to query. Format: yyyyMMdd. Example: 20181225.
     *
     * This parameter is required.
     * @example 20201002
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The type of the message template. Valid values: Valid values:
     *
     *   **0**: verification code
     *   **1**: notification
     *   **2**: promotional message (Enterprise users only)
     *   **3**: international purpose (Enterprise users only)
     *   **7**: digital message
     *
     * @example 0
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'endDate'              => 'EndDate',
        'isGlobe'              => 'IsGlobe',
        'ownerId'              => 'OwnerId',
        'pageIndex'            => 'PageIndex',
        'pageSize'             => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'signName'             => 'SignName',
        'startDate'            => 'StartDate',
        'templateType'         => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->isGlobe) {
            $res['IsGlobe'] = $this->isGlobe;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySendStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['IsGlobe'])) {
            $model->isGlobe = $map['IsGlobe'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
