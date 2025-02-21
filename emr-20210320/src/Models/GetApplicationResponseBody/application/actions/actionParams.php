<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions\actionParams\valueAttribute;

class actionParams extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $key;
    /**
     * @var valueAttribute
     */
    public $valueAttribute;
    protected $_name = [
        'description'    => 'Description',
        'key'            => 'Key',
        'valueAttribute' => 'ValueAttribute',
    ];

    public function validate()
    {
        if (null !== $this->valueAttribute) {
            $this->valueAttribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->valueAttribute) {
            $res['ValueAttribute'] = null !== $this->valueAttribute ? $this->valueAttribute->toArray($noStream) : $this->valueAttribute;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['ValueAttribute'])) {
            $model->valueAttribute = valueAttribute::fromMap($map['ValueAttribute']);
        }

        return $model;
    }
}
