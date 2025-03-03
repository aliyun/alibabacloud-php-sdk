<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class CreateApiDestinationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiDestinationName;
    /**
     * @var string
     */
    public $connectionName;
    /**
     * @var string
     */
    public $description;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
