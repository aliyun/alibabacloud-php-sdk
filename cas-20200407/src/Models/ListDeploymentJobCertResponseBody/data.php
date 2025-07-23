<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobCertResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The algorithm of the certificate public key.
     *
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The ID of the certificate.
     *
     * @example 11174100
     *
     * @var int
     */
    public $certId;

    /**
     * @description The instance ID of the certificate.
     *
     * @example cas-ivauto-2crxzi
     *
     * @var string
     */
    public $certInstanceId;

    /**
     * @description The name of the certificate.
     *
     * @example edkog.shop
     *
     * @var string
     */
    public $certName;

    /**
     * @description The type of the certificate order. Valid values:
     *
     *   **upload**: uploaded certificate.
     *   **buy**: purchased certificate.
     *   **free**: free certificate. This value is available only on the China site (aliyun.com).
     *
     * @example buy
     *
     * @var string
     */
    public $certOrderType;

    /**
     * @description The type of the certificate.
     *
     * @example DV
     *
     * @var string
     */
    public $certType;

    /**
     * @description The common name of the certificate.
     *
     * @example vaultwebhook.vault-webhook.svc
     *
     * @var string
     */
    public $commonName;

    /**
     * @description Indicates whether the certificate is hosted. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isTrustee;

    /**
     * @description The month in which the certificate is applied for.
     *
     * @example 12
     *
     * @var int
     */
    public $month;

    /**
     * @description The end time of the validity period of the certificate. The value is a timestamp in seconds.
     *
     * @example 1683625266108
     *
     * @var int
     */
    public $notAfterTime;

    /**
     * @description The start time of the validity period of the certificate. The value is a timestamp in seconds.
     *
     * @example 1683625266108
     *
     * @var int
     */
    public $notBeforeTime;

    /**
     * @description The ID of the certificate order.
     *
     * >  If CertId is returned, this parameter is not returned.
     *
     * @example 6127067
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The subject alternative name (SAN) extensions of the certificate.
     *
     * @var string[]
     */
    public $sans;

    /**
     * @description The status code of the certificate. Valid values:
     *
     *   **payed**: paid and pending application
     *   **checking**: being validated
     *   **checkedFail**: validation failed
     *   **revoked**: revoked
     *   **revokeChecking**: revocation request being validated
     *   **issued**: issued (excluding hosted certificates that are issued, certificates that are about to expire, expired certificates, and uploaded certificates)
     *   **trustee**: hosted and issued
     *   **upload**: uploaded (excluding certificates that are about to expire and expired certificates)
     *   **willExpired**: about to expire (including certificates issued by using the Certificate Management Service console and uploaded certificates)
     *   **expired**: expired (including certificates issued by using the Certificate Management Service console and uploaded certificates)
     *   **validity**: valid (including certificates that are not expired or revoked)
     *   **refund**: refunded
     *   **closed**: closed
     *
     * @example issued
     *
     * @var string
     */
    public $statusCode;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'certId' => 'CertId',
        'certInstanceId' => 'CertInstanceId',
        'certName' => 'CertName',
        'certOrderType' => 'CertOrderType',
        'certType' => 'CertType',
        'commonName' => 'CommonName',
        'isTrustee' => 'IsTrustee',
        'month' => 'Month',
        'notAfterTime' => 'NotAfterTime',
        'notBeforeTime' => 'NotBeforeTime',
        'orderId' => 'OrderId',
        'sans' => 'Sans',
        'statusCode' => 'StatusCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certInstanceId) {
            $res['CertInstanceId'] = $this->certInstanceId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certOrderType) {
            $res['CertOrderType'] = $this->certOrderType;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->isTrustee) {
            $res['IsTrustee'] = $this->isTrustee;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->notAfterTime) {
            $res['NotAfterTime'] = $this->notAfterTime;
        }
        if (null !== $this->notBeforeTime) {
            $res['NotBeforeTime'] = $this->notBeforeTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertInstanceId'])) {
            $model->certInstanceId = $map['CertInstanceId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertOrderType'])) {
            $model->certOrderType = $map['CertOrderType'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['IsTrustee'])) {
            $model->isTrustee = $map['IsTrustee'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['NotAfterTime'])) {
            $model->notAfterTime = $map['NotAfterTime'];
        }
        if (isset($map['NotBeforeTime'])) {
            $model->notBeforeTime = $map['NotBeforeTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Sans'])) {
            if (!empty($map['Sans'])) {
                $model->sans = $map['Sans'];
            }
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
