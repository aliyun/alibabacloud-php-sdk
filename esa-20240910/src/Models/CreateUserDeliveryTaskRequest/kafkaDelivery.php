<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;

use AlibabaCloud\Tea\Model;

class kafkaDelivery extends Model
{
    /**
     * @description The load balancing method.
     *
     * @example kafka.LeastBytes
     *
     * @var string
     */
    public $balancer;

    /**
     * @description The brokers.
     *
     * @var string[]
     */
    public $brokers;

    /**
     * @description The compression method. By default, data is not compressed.
     *
     * @example gzip
     *
     * @var string
     */
    public $compress;

    /**
     * @description The encryption method.
     *
     * @example plain
     *
     * @var string
     */
    public $machanismType;

    /**
     * @description The password.
     *
     * @example xxx
     *
     * @var string
     */
    public $password;

    /**
     * @description The topic.
     *
     * @example dqc_test2
     *
     * @var string
     */
    public $topic;

    /**
     * @description Specifies whether to enable authentication.
     *
     * @example true
     *
     * @var bool
     */
    public $userAuth;

    /**
     * @description The username.
     *
     * @example xxx
     *
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
