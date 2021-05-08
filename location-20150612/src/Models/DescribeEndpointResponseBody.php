<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models;

use AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointResponseBody\protocols;
use AlibabaCloud\Tea\Model;

class DescribeEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serivceCode;

    /**
     * @var string
     */
    public $id;

    /**
     * @var protocols
     */
    public $protocols;
    protected $_name = [
        'type'        => 'Type',
        'requestId'   => 'RequestId',
        'endpoint'    => 'Endpoint',
        'namespace'   => 'Namespace',
        'serivceCode' => 'SerivceCode',
        'id'          => 'Id',
        'protocols'   => 'Protocols',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serivceCode) {
            $res['SerivceCode'] = $this->serivceCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = null !== $this->protocols ? $this->protocols->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['SerivceCode'])) {
            $model->serivceCode = $map['SerivceCode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Protocols'])) {
            $model->protocols = protocols::fromMap($map['Protocols']);
        }

        return $model;
    }
}
