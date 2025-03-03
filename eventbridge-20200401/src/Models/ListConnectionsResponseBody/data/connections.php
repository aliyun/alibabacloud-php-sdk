<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponseBody\data\connections\authParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponseBody\data\connections\networkParameters;

class connections extends Model
{
    /**
     * @var authParameters
     */
    public $authParameters;
    /**
     * @var string
     */
    public $connectionName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var int
     */
    public $id;
    /**
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
        if (null !== $this->authParameters) {
            $this->authParameters->validate();
        }
        if (null !== $this->networkParameters) {
            $this->networkParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authParameters) {
            $res['AuthParameters'] = null !== $this->authParameters ? $this->authParameters->toArray($noStream) : $this->authParameters;
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
            $res['NetworkParameters'] = null !== $this->networkParameters ? $this->networkParameters->toArray($noStream) : $this->networkParameters;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
