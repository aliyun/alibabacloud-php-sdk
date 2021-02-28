<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages\text;

use AlibabaCloud\Tea\Model;

class slots extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $isHit;
    protected $_name = [
        'value'  => 'Value',
        'origin' => 'Origin',
        'name'   => 'Name',
        'isHit'  => 'IsHit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->isHit) {
            $res['IsHit'] = $this->isHit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IsHit'])) {
            $model->isHit = $map['IsHit'];
        }

        return $model;
    }
}
