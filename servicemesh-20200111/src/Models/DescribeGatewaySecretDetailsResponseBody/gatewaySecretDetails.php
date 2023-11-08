<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGatewaySecretDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class gatewaySecretDetails extends Model
{
    /**
     * @description The time when the certificate expires.
     *
     * @example 2023-03-03 07:45
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The name of the gateway.
     *
     * @example bookinfo-gateway
     *
     * @var string
     */
    public $gatewayName;

    /**
     * @description The time when the certificate was issued.
     *
     * @example 2022-03-03 07:45
     *
     * @var string
     */
    public $issueTime;

    /**
     * @description *   An error message is returned if the status of the gateway is abnormal. Examples: `tls.crt not exist`, `tls.key not exist`, and `secret type must be kubernetes.io/tls`.
     *   An empty value is returned if the status of the gateway is normal.
     *
     * @example tls.crt not exist
     *
     * @var string
     */
    public $message;

    /**
     * @description The Server Name Indication (SNI) value.
     *
     * @example demo.com
     *
     * @var string
     */
    public $SNI;

    /**
     * @description The name of the secret.
     *
     * @example demo-secret
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The status of the certificate. Valid values:
     *
     *   `normal`
     *   `abnormal`
     *
     * @example normal
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'expiredTime' => 'ExpiredTime',
        'gatewayName' => 'GatewayName',
        'issueTime'   => 'IssueTime',
        'message'     => 'Message',
        'SNI'         => 'SNI',
        'secretName'  => 'SecretName',
        'state'       => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->issueTime) {
            $res['IssueTime'] = $this->issueTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->SNI) {
            $res['SNI'] = $this->SNI;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewaySecretDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['IssueTime'])) {
            $model->issueTime = $map['IssueTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SNI'])) {
            $model->SNI = $map['SNI'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
