<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListUserCertificateOrderRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The domain names that are bound or the ID of the order. Fuzzy match is supported.
     *
     * @example cert-instanceId
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The type of the order. Valid values:
     *
     *   **CPACK**: virtual resource order. If you set OrderType to CPACK, only the information about orders that are generated to consume the certificate quota is returned.
     *   **BUY**: purchase order. If you set OrderType to BUY, only the information about purchase orders is returned. In most cases, this type of order can be ignored.
     *   **UPLOAD**: uploaded certificate. If you set OrderType to UPLOAD, only uploaded certificates are returned.
     *   **CERT**: certificate. If you set OrderType to CERT, both issued certificates and uploaded certificates are returned.
     *
     * @example CPACK
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-ae******4wia
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of entries to return on each page. Default value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The certificate status of the order. Valid values:
     *
     *   **PAYED**: pending application. You can set Status to PAYED only if you set OrderType to CPACK or BUY.
     *   **CHECKING**: reviewing. You can set Status to CHECKING only if you set OrderType to CPACK or BUY.
     *   **CHECKED_FAIL**: review failed. You can set Status to CHECKED_FAIL only if you set OrderType to CPACK or BUY.
     *   **ISSUED**: issued.
     *   **WILLEXPIRED**: about to expire.
     *   **EXPIRED**: expired.
     *   **NOTACTIVATED**: not activated. You can set Status to NOTACTIVATED only if you set OrderType to CPACK or BUY.
     *   **REVOKED**: revoked. You can set Status to REVOKED only if you set OrderType to CPACK or BUY.
     *
     * @example ISSUED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'keyword'         => 'Keyword',
        'orderType'       => 'OrderType',
        'resourceGroupId' => 'ResourceGroupId',
        'showSize'        => 'ShowSize',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserCertificateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
