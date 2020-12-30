<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisConnectionsResponseBody\uisConnections;

use AlibabaCloud\Tea\Model;

class uisConnection extends Model
{
    /**
     * @var string
     */
    public $greConfig;

    /**
     * @var string
     */
    public $uisId;

    /**
     * @var string
     */
    public $uisNodeId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $uisProtocol;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sslConfig;

    /**
     * @var string
     */
    public $uisConnectionId;
    protected $_name = [
        'greConfig'       => 'GreConfig',
        'uisId'           => 'UisId',
        'uisNodeId'       => 'UisNodeId',
        'description'     => 'Description',
        'state'           => 'State',
        'uisProtocol'     => 'UisProtocol',
        'name'            => 'Name',
        'sslConfig'       => 'SslConfig',
        'uisConnectionId' => 'UisConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->greConfig) {
            $res['GreConfig'] = $this->greConfig;
        }
        if (null !== $this->uisId) {
            $res['UisId'] = $this->uisId;
        }
        if (null !== $this->uisNodeId) {
            $res['UisNodeId'] = $this->uisNodeId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->uisProtocol) {
            $res['UisProtocol'] = $this->uisProtocol;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sslConfig) {
            $res['SslConfig'] = $this->sslConfig;
        }
        if (null !== $this->uisConnectionId) {
            $res['UisConnectionId'] = $this->uisConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisConnection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GreConfig'])) {
            $model->greConfig = $map['GreConfig'];
        }
        if (isset($map['UisId'])) {
            $model->uisId = $map['UisId'];
        }
        if (isset($map['UisNodeId'])) {
            $model->uisNodeId = $map['UisNodeId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UisProtocol'])) {
            $model->uisProtocol = $map['UisProtocol'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SslConfig'])) {
            $model->sslConfig = $map['SslConfig'];
        }
        if (isset($map['UisConnectionId'])) {
            $model->uisConnectionId = $map['UisConnectionId'];
        }

        return $model;
    }
}
