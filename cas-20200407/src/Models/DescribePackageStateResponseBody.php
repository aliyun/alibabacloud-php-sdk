<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DescribePackageStateResponseBody extends Model
{
    /**
     * @description The number of issued certificates of the specified specifications.
     *
     * @example 1
     *
     * @var int
     */
    public $issuedCount;

    /**
     * @description The specifications of the certificate. Valid values:
     *
     *   **symantec-free-1-free**: DigiCert single-domain DV certificate in 3 months free trial.
     *   **symantec-free-1-free**: DigiCert single-domain DV certificate in 1 year free trial.
     *   **symantec-dv-1-starter**: DigiCert wildcard DV certificate.
     *   **symantec-ov-1-personal**: DigiCert single-domain OV certificate.
     *   **symantec-ov-w-personal**: DigiCert wildcard OV certificate.
     *   **geotrust-dv-1-starter**: GeoTrust single-domain DV certificate.
     *   **geotrust-dv-w-starter**: GeoTrust wildcard DV certificate.
     *   **geotrust-ov-1-personal**: GeoTrust single-domain OV certificate.
     *   **geotrust-ov-w-personal**: GeoTrust wildcard OV certificate.
     *   **globalsign-dv-1-personal**: GlobalSign single-domain DV certificate.
     *   **globalsign-dv-w-advanced**: GlobalSign wildcard DV certificate.
     *   **globalsign-ov-1-personal**: GlobalSign single-domain OV certificate.
     *   **globalsign-ov-w-advanced**: GlobalSign wildcard OV certificate.
     *   **cfca-ov-1-personal**: CFCA single-domain OV certificate.
     *   **cfca-ev-w-advanced**: CFCA wildcard OV certificate.
     *
     * @example digicert-free-1-free
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 10CFA380-1C58-45C7-8075-06215F3DB681
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of purchased certificate resource plans of the specified specifications.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The number of certificate applications that you submitted for certificates of the specified specifications.
     *
     * > A successful call of the [CreateCertificateForPackageRequest](~~455296~~), [CreateCertificateRequest](~~455292~~), or [CreateCertificateWithCsrRequest](~~455801~~) operation is counted as one a certificate application, regardless of whether the certificate is issued.
     * @example 2
     *
     * @var int
     */
    public $usedCount;
    protected $_name = [
        'issuedCount' => 'IssuedCount',
        'productCode' => 'ProductCode',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
        'usedCount'   => 'UsedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issuedCount) {
            $res['IssuedCount'] = $this->issuedCount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePackageStateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssuedCount'])) {
            $model->issuedCount = $map['IssuedCount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }

        return $model;
    }
}
