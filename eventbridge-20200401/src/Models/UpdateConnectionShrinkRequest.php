<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnectionShrinkRequest extends Model
{
    /**
     * @description The parameters that are configured for authentication.
     *
     * @var string
     */
    public $authParametersShrink;

    /**
     * @description The name of the connection that you want to update. The name must be 2 to 127 characters in length.
     *
     * This parameter is required.
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
     * @var string
     */
    public $networkParametersShrink;
    protected $_name = [
        'authParametersShrink'    => 'AuthParameters',
        'connectionName'          => 'ConnectionName',
        'description'             => 'Description',
        'networkParametersShrink' => 'NetworkParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authParametersShrink) {
            $res['AuthParameters'] = $this->authParametersShrink;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->networkParametersShrink) {
            $res['NetworkParameters'] = $this->networkParametersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnectionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthParameters'])) {
            $model->authParametersShrink = $map['AuthParameters'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkParameters'])) {
            $model->networkParametersShrink = $map['NetworkParameters'];
        }

        return $model;
    }
}
