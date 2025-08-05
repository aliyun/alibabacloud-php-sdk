<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\networkParameters;
use AlibabaCloud\Tea\Model;

class UpdateConnectionRequest extends Model
{
    /**
     * @description The parameters that are configured for authentication.
     *
     * @var authParameters
     */
    public $authParameters;

    /**
     * @description The name of the connection that you want to update. The name must be 2 to 127 characters in length.
     *
     * This parameter is required.
     *
     * @example connection-name
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description The description of the connection. The description can be up to 255 characters in length.
     *
     * @example The description of the connection.
     *
     * @var string
     */
    public $description;

    /**
     * @description The parameters that are configured for the network.
     *
     * This parameter is required.
     *
     * @var networkParameters
     */
    public $networkParameters;
    protected $_name = [
        'authParameters' => 'AuthParameters',
        'connectionName' => 'ConnectionName',
        'description' => 'Description',
        'networkParameters' => 'NetworkParameters',
    ];

    public function validate() {}

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
        if (null !== $this->networkParameters) {
            $res['NetworkParameters'] = null !== $this->networkParameters ? $this->networkParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnectionRequest
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
        if (isset($map['NetworkParameters'])) {
            $model->networkParameters = networkParameters::fromMap($map['NetworkParameters']);
        }

        return $model;
    }
}
