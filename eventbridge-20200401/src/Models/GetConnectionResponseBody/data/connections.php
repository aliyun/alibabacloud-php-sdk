<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\networkParameters;
use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @description The authentication methods.
     *
     * @var authParameters
     */
    public $authParameters;

    /**
     * @description The connection name.
     *
     * @example demo
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description The connection description.
     *
     * @example demo
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the connection was created.
     *
     * @example 1669648905
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The data source ID.
     *
     * @example 5668
     *
     * @var int
     */
    public $id;

    /**
     * @description The information about the network.
     *
     * @var networkParameters
     */
    public $networkParameters;
    protected $_name = [
        'authParameters'    => 'AuthParameters',
        'connectionName'    => 'ConnectionName',
        'description'       => 'Description',
        'gmtCreate'         => 'GmtCreate',
        'id'                => 'Id',
        'networkParameters' => 'NetworkParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authParameters) {
            $res['AuthParameters'] = null !== $this->authParameters ? $this->authParameters->toMap() : null;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->networkParameters) {
            $res['NetworkParameters'] = null !== $this->networkParameters ? $this->networkParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthParameters'])) {
            $model->authParameters = authParameters::fromMap($map['AuthParameters']);
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NetworkParameters'])) {
            $model->networkParameters = networkParameters::fromMap($map['NetworkParameters']);
        }

        return $model;
    }
}
