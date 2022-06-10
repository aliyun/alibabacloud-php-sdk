<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo\intentList;

use AlibabaCloud\Tea\Model;

class slotList extends Model
{
    /**
     * @description 实体名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 实体原词（实体成员）
     *
     * @var string
     */
    public $origin;

    /**
     * @description 实体类型，当前只有text类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 实体同义词
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'   => 'Name',
        'origin' => 'Origin',
        'type'   => 'Type',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slotList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
