<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobCertResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $algorithm;
    /**
     * @var int
     */
    public $certId;
    /**
     * @var string
     */
    public $certInstanceId;
    /**
     * @var string
     */
    public $certName;
    /**
     * @var string
     */
    public $certOrderType;
    /**
     * @var string
     */
    public $certType;
    /**
     * @var string
     */
    public $commonName;
    /**
     * @var bool
     */
    public $isTrustee;
    /**
     * @var int
     */
    public $month;
    /**
     * @var int
     */
    public $notAfterTime;
    /**
     * @var int
     */
    public $notBeforeTime;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string[]
     */
    public $sans;
    /**
     * @var string
     */
    public $statusCode;
    protected $_name = [
        'algorithm'      => 'Algorithm',
        'certId'         => 'CertId',
        'certInstanceId' => 'CertInstanceId',
        'certName'       => 'CertName',
        'certOrderType'  => 'CertOrderType',
        'certType'       => 'CertType',
        'commonName'     => 'CommonName',
        'isTrustee'      => 'IsTrustee',
        'month'          => 'Month',
        'notAfterTime'   => 'NotAfterTime',
        'notBeforeTime'  => 'NotBeforeTime',
        'orderId'        => 'OrderId',
        'sans'           => 'Sans',
        'statusCode'     => 'StatusCode',
    ];

    public function validate()
    {
        if (\is_array($this->sans)) {
            Model::validateArray($this->sans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sans)) {
                $res['Sans'] = [];
                $n1          = 0;
                foreach ($this->sans as $item1) {
                    $res['Sans'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->sans = [];
                $n1          = 0;
                foreach ($map['Sans'] as $item1) {
                    $model->sans[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
