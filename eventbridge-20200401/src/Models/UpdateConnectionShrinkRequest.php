<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class UpdateConnectionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $authParametersShrink;

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
    public $networkParametersShrink;
    protected $_name = [
        'authParametersShrink' => 'AuthParameters',
        'connectionName' => 'ConnectionName',
        'description' => 'Description',
        'networkParametersShrink' => 'NetworkParameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
