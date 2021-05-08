<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsByIpResponseBody\endpointList;

use AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsByIpResponseBody\endpointList\itemEndpoint\protocols;
use AlibabaCloud\Tea\Model;

class itemEndpoint extends Model
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
    public $product;

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
        'type'      => 'Type',
        'namespace' => 'Namespace',
        'product'   => 'Product',
        'id'        => 'Id',
        'endpoint'  => 'Endpoint',
        'protocols' => 'Protocols',
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
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
     * @return itemEndpoint
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
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
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
