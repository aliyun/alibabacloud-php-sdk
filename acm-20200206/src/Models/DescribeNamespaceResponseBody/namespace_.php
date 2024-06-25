<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespaceResponseBody;

use AlibabaCloud\Tea\Model;

class namespace_ extends Model
{
    /**
     * @example 2c017****
     *
     * @var string
     */
    public $accessKey;

    /**
     * @example acm.aliyun.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $name;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 6/eQ0****
     *
     * @var string
     */
    public $secretKey;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'endpoint'  => 'Endpoint',
        'name'      => 'Name',
        'regionId'  => 'RegionId',
        'secretKey' => 'SecretKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespace_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }

        return $model;
    }
}
