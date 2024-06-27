<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventLogPageResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $umid;
    protected $_name = [
        'accountId' => 'accountId',
        'email'     => 'email',
        'ip'        => 'ip',
        'mobile'    => 'mobile',
        'nickName'  => 'nickName',
        'requestId' => 'requestId',
        'score'     => 'score',
        'service'   => 'service',
        'tags'      => 'tags',
        'timestamp' => 'timestamp',
        'umid'      => 'umid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->umid) {
            $res['umid'] = $this->umid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }
        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['umid'])) {
            $model->umid = $map['umid'];
        }

        return $model;
    }
}
