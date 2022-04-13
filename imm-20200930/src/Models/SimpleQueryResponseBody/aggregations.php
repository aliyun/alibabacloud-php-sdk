<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryResponseBody;

use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryResponseBody\aggregations\groups;
use AlibabaCloud\Tea\Model;

class aggregations extends Model
{
    /**
     * @description 聚合字段名
     *
     * @var string
     */
    public $field;

    /**
     * @description 分组聚合的结果
     *
     * @var groups[]
     */
    public $groups;

    /**
     * @description 聚合字段的聚合操作符
     *
     * @var string
     */
    public $operation;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'field'     => 'Field',
        'groups'    => 'Groups',
        'operation' => 'Operation',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->groups) {
            $res['Groups'] = [];
            if (null !== $this->groups && \is_array($this->groups)) {
                $n = 0;
                foreach ($this->groups as $item) {
                    $res['Groups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n             = 0;
                foreach ($map['Groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
