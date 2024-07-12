<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class FindInstanceInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $extrasShrink;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var bool
     */
    public $needDNS;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bussinessCode' => 'bussinessCode',
        'domain'        => 'domain',
        'endTime'       => 'endTime',
        'extrasShrink'  => 'extras',
        'ip'            => 'ip',
        'needDNS'       => 'needDNS',
        'startTime'     => 'startTime',
        'url'           => 'url',
        'userId'        => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bussinessCode) {
            $res['bussinessCode'] = $this->bussinessCode;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->extrasShrink) {
            $res['extras'] = $this->extrasShrink;
        }
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->needDNS) {
            $res['needDNS'] = $this->needDNS;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindInstanceInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bussinessCode'])) {
            $model->bussinessCode = $map['bussinessCode'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['extras'])) {
            $model->extrasShrink = $map['extras'];
        }
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['needDNS'])) {
            $model->needDNS = $map['needDNS'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
