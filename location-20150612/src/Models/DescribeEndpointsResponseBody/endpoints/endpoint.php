<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointsResponseBody\endpoints;

use AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointsResponseBody\endpoints\endpoint\protocols;
use AlibabaCloud\Tea\Model;

class endpoint extends Model
{
    /**
     * @var string
     */
    public $type;

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
     * @var string
     */
    public $endpoint;

    /**
     * @var protocols
     */
    public $protocols;
    protected $_name = [
        'type'        => 'Type',
        'namespace'   => 'Namespace',
        'serivceCode' => 'SerivceCode',
        'id'          => 'Id',
        'endpoint'    => 'Endpoint',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serivceCode) {
            $res['SerivceCode'] = $this->serivceCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = null !== $this->protocols ? $this->protocols->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Protocols'])) {
            $model->protocols = protocols::fromMap($map['Protocols']);
        }

        return $model;
    }
}
