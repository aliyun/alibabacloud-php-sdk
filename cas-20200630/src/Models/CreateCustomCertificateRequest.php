<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough;
use AlibabaCloud\Tea\Model;

class CreateCustomCertificateRequest extends Model
{
    /**
     * @description The passthrough parameters.
     *
     * @var apiPassthrough
     */
    public $apiPassthrough;

    /**
     * @description The content of the CSR. You can generate a CSR by using the OpenSSL tool or the Keytool tool. For more information, see [How do I create a CSR file?](https://help.aliyun.com/document_detail/42218.html)
     *
     * This parameter is required.
     *
     * @example -----BEGIN CERTIFICATE REQUEST-----
     * MIIBczCCARgCAQAwgYoxFDASBgNVBAMMC2FsaXl1bi50ZXN0MQ0wCwYDVQQ
     * ...
     * ...
     * ...
     * vbIgMQIhAKHDWD6/WAMbtezAt4bysJ/BZIDz1jPWuUR5GV4TJ/mS
     * -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @description include the CRL address.
     *
     * - 0- No
     * - 1- Yes
     *
     * @example 1
     *
     * @var int
     */
    public $enableCrl;

    /**
     * @description Specifies whether to immediately issue the certificate. Valid values:
     *
     *   0: asynchronously issues the certificate.
     *   1: immediately issues the certificate.
     *   2: immediately issues the certificate and returns the certificate chain.
     *
     * @example 0
     *
     * @var int
     */
    public $immediately;

    /**
     * @description The identifier of the certificate.
     *
     * This parameter is required.
     *
     * @example 1ed4068c-6f1b-6deb-8e32-3f8439a851cb
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description The validity period of the certificate. The value cannot exceed the validity period of the certificate instance. Relative time and absolute time are supported.
     *
     * Units of relative time: year, month, and day.
     *
     *   Use y to specify years.
     *   Use m to specify months.
     *   Use d to specify days.
     *
     * Absolute time: Use Greenwich Mean Time (GMT). Format: `yyyy-MM-dd\\"T\\"HH:mm:ss\\"Z\\"`
     *
     *   Format of the end time: $NotAfter
     *   Format of the start time and end time: $NotBefore/$NotAfter
     *
     * This parameter is required.
     *
     * @example Relative time:
     * ● 1y
     * ● 3m
     * ● 7d
     * Absolute time:
     * ● 2006-01-02T15:04:05Z
     * ● 2006-01-02T15:04:05Z/2023-03-09T17:48:13Z
     *
     * @var string
     */
    public $validity;
    protected $_name = [
        'apiPassthrough' => 'ApiPassthrough',
        'csr' => 'Csr',
        'enableCrl' => 'EnableCrl',
        'immediately' => 'Immediately',
        'parentIdentifier' => 'ParentIdentifier',
        'validity' => 'Validity',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiPassthrough) {
            $res['ApiPassthrough'] = null !== $this->apiPassthrough ? $this->apiPassthrough->toMap() : null;
        }
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->enableCrl) {
            $res['EnableCrl'] = $this->enableCrl;
        }
        if (null !== $this->immediately) {
            $res['Immediately'] = $this->immediately;
        }
        if (null !== $this->parentIdentifier) {
            $res['ParentIdentifier'] = $this->parentIdentifier;
        }
        if (null !== $this->validity) {
            $res['Validity'] = $this->validity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiPassthrough'])) {
            $model->apiPassthrough = apiPassthrough::fromMap($map['ApiPassthrough']);
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['EnableCrl'])) {
            $model->enableCrl = $map['EnableCrl'];
        }
        if (isset($map['Immediately'])) {
            $model->immediately = $map['Immediately'];
        }
        if (isset($map['ParentIdentifier'])) {
            $model->parentIdentifier = $map['ParentIdentifier'];
        }
        if (isset($map['Validity'])) {
            $model->validity = $map['Validity'];
        }

        return $model;
    }
}
