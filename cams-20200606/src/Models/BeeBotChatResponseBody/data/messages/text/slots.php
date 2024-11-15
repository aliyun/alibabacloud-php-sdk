<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages\text;

use AlibabaCloud\Tea\Model;

class slots extends Model
{
    /**
     * @description Whether it hits.
     *
     * @example false
     *
     * @var bool
     */
    public $hit;

    /**
     * @description Name.
     *
     * @example Check weather intentions. city
     *
     * @var string
     */
    public $name;

    /**
     * @description Original value.
     *
     * @example Beijing
     *
     * @var string
     */
    public $origin;

    /**
     * @description Specific values.
     *
     * @example Beijing
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'hit'    => 'Hit',
        'name'   => 'Name',
        'origin' => 'Origin',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hit) {
            $res['Hit'] = $this->hit;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Hit'])) {
            $model->hit = $map['Hit'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
