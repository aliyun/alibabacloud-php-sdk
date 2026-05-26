<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class UpdateConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'key' => 'Key',
        'updatedAt' => 'UpdatedAt',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
