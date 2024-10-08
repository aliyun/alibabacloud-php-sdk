<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest;

use AlibabaCloud\Tea\Model;

class kafkaDelivery extends Model
{
    /**
     * @var string
     */
    public $balancer;

    /**
     * @var string[]
     */
    public $brokers;

    /**
     * @example gzip
     *
     * @var string
     */
    public $compress;

    /**
     * @var string
     */
    public $machanismType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var bool
     */
    public $userAuth;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'balancer'      => 'Balancer',
        'brokers'       => 'Brokers',
        'compress'      => 'Compress',
        'machanismType' => 'MachanismType',
        'password'      => 'Password',
        'topic'         => 'Topic',
        'userAuth'      => 'UserAuth',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->balancer) {
            $res['Balancer'] = $this->balancer;
        }
        if (null !== $this->brokers) {
            $res['Brokers'] = $this->brokers;
        }
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }
        if (null !== $this->machanismType) {
            $res['MachanismType'] = $this->machanismType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->userAuth) {
            $res['UserAuth'] = $this->userAuth;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kafkaDelivery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Balancer'])) {
            $model->balancer = $map['Balancer'];
        }
        if (isset($map['Brokers'])) {
            if (!empty($map['Brokers'])) {
                $model->brokers = $map['Brokers'];
            }
        }
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }
        if (isset($map['MachanismType'])) {
            $model->machanismType = $map['MachanismType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['UserAuth'])) {
            $model->userAuth = $map['UserAuth'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
