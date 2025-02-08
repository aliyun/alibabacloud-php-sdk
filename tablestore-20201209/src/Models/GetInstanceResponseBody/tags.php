<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $tagKey;
    /**
     * @var string
     */
    public $tagValue;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'key'      => 'Key',
        'tagKey'   => 'TagKey',
        'tagValue' => 'TagValue',
        'value'    => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
