<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGatewaySecretDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class gatewaySecretDetails extends Model
{
    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var string
     */
    public $issueTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $SNI;

    /**
     * @var string
     */
    public $secretName;

    /**
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
