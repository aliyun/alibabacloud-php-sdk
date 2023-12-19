<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DescribePackageStateRequest extends Model
{
    /**
     * @description The specifications of the certificate resource plan. Valid values:
     *
     *   **digicert-free-1-free**: DigiCert single-domain DV certificate in 3 months free trial. This is the default value.
     *   **symantec-free-1-free**: DigiCert single-domain DV certificate in 1 year free trial.
     *   **symantec-dv-1-starter**: DigiCert wildcard DV certificate.
     *   **symantec-ov-1-personal**: DigiCert single-domain organization validated (OV) certificate.
     *   **symantec-ov-w-personal**: DigiCert wildcard OV certificate.
     *   **geotrust-dv-1-starter**: GeoTrust single-domain DV certificate.
     *   **geotrust-dv-w-starter**: GeoTrust wildcard DV certificate.
     *   **geotrust-ov-1-personal**: GeoTrust single-domain OV certificate.
     *   **geotrust-ov-w-personal**: GeoTrust wildcard OV certificate.
     *   **globalsign-dv-1-personal**: GlobalSign single-domain DV certificate.
     *   **globalsign-dv-w-advanced**: GlobalSign wildcard DV certificate.
     *   **globalsign-ov-1-personal**: GlobalSign single-domain OV certificate.
     *   **globalsign-ov-w-advanced**: GlobalSign wildcard OV certificate.
     *   **cfca-ov-1-personal**: China Financial Certification Authority (CFCA) single-domain OV certificate.
     *   **cfca-ev-w-advanced**: CFCA wildcard OV certificate.
     *
     * @example digicert-free-1-free
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePackageStateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
