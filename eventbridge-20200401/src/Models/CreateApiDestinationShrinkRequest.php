<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class CreateApiDestinationShrinkRequest extends Model
{
    /**
     * @description The name of the API destination. The name must be 2 to 127 characters in length.
     *
     * @example api-destination-name
     *
     * @var string
     */
    public $apiDestinationName;

    /**
     * @description The name of the connection. The name must be 2 to 127 characters in length.
     *
     * >  Before you configure this parameter, you must call the CreateConnection operation to create a connection. Then, set this parameter to the name of the connection that you created.
     * @example connection-name
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description The description of the API destination. The description can be up to 255 characters in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description The parameters that are configured for the API destination.
     *
     * @var string
     */
    public $httpApiParametersShrink;
    protected $_name = [
        'apiDestinationName'      => 'ApiDestinationName',
        'connectionName'          => 'ConnectionName',
        'description'             => 'Description',
        'httpApiParametersShrink' => 'HttpApiParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDestinationName) {
            $res['ApiDestinationName'] = $this->apiDestinationName;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->httpApiParametersShrink) {
            $res['HttpApiParameters'] = $this->httpApiParametersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiDestinationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDestinationName'])) {
            $model->apiDestinationName = $map['ApiDestinationName'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HttpApiParameters'])) {
            $model->httpApiParametersShrink = $map['HttpApiParameters'];
        }

        return $model;
    }
}
