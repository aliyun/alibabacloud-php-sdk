<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListCertRequest extends Model
{
    /**
     * @description The type of the certificate.
     *
     *   **CA**: the CA certificate.
     *   **CERT**: a issued certificate.
     *
     * @example CERT
     *
     * @var string
     */
    public $certType;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The keyword for the query. You can enter a name, domain name, or Subject Alternative Name (SAN) extension. Fuzzy match is supported.
     *
     * @example test_name
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The number of entries to return on each page. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The source of the certificate. Valid values:
     *
     *   **upload**: uploaded certificate
     *   **aliyun**: Alibaba Cloud certificate
     *
     * @example aliyun
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The status of the certificate. Valid values:
     *
     *   **ISSUE**: issued
     *   **REVOKE**: revoked
     *
     * @example ISSUE
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the certificate repository. You can call the [ListCertWarehouse](~~453246~~) operation to query the IDs of certificate repositories.
     *
     * @example 12
     *
     * @var int
     */
    public $warehouseId;
    protected $_name = [
        'certType'    => 'CertType',
        'currentPage' => 'CurrentPage',
        'keyWord'     => 'KeyWord',
        'showSize'    => 'ShowSize',
        'sourceType'  => 'SourceType',
        'status'      => 'Status',
        'warehouseId' => 'WarehouseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->warehouseId) {
            $res['WarehouseId'] = $this->warehouseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WarehouseId'])) {
            $model->warehouseId = $map['WarehouseId'];
        }

        return $model;
    }
}
