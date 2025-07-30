<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class DescribeCACertificateListRequest extends Model
{
    /**
     * @description Ca status.
     *
     * - issue: inUse.
     * - forbidden: forbidden.
     * - revoke: revoked.
     *
     * @example issue
     *
     * @var string
     */
    public $caStatus;

    /**
     * @description The type of the certificate. Valid values:
     *
     * - root: rootCA.
     * - subRoot: subCA.
     * - externalCa: import.
     *
     * @example subRoot
     *
     * @var string
     */
    public $certType;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The unique identifier of the CA certificate.
     *
     * >  You can call the [DescribeCACertificateList](https://help.aliyun.com/document_detail/328095.html) operation to query the unique identifiers of all CA certificates.
     *
     * @example 160ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The CA Issuer Type.
     *
     * - local: Private certificate.
     * - iTrusChina: Compliance CA.
     * - external: External Import.
     *
     * @example local
     *
     * @var string
     */
    public $issuerType;

    /**
     * @description The number of CA certificates per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;

    /**
     * @description valid time.
     *
     * - valid: means in the valid period.
     * - notValid: means expired.
     *
     * @example valid
     *
     * @var string
     */
    public $validStatus;
    protected $_name = [
        'caStatus' => 'CaStatus',
        'certType' => 'CertType',
        'currentPage' => 'CurrentPage',
        'identifier' => 'Identifier',
        'issuerType' => 'IssuerType',
        'showSize' => 'ShowSize',
        'validStatus' => 'ValidStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->caStatus) {
            $res['CaStatus'] = $this->caStatus;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->issuerType) {
            $res['IssuerType'] = $this->issuerType;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->validStatus) {
            $res['ValidStatus'] = $this->validStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCACertificateListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaStatus'])) {
            $model->caStatus = $map['CaStatus'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['IssuerType'])) {
            $model->issuerType = $map['IssuerType'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['ValidStatus'])) {
            $model->validStatus = $map['ValidStatus'];
        }

        return $model;
    }
}
