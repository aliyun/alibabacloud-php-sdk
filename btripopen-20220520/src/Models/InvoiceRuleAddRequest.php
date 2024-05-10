<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleAddRequest\entities;
use AlibabaCloud\Tea\Model;

class InvoiceRuleAddRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var entities[]
     */
    public $entities;

    /**
     * @description This parameter is required.
     *
     * @example 4854821
     *
     * @var string
     */
    public $thirdPartId;
    protected $_name = [
        'entities'    => 'entities',
        'thirdPartId' => 'third_part_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entities) {
            $res['entities'] = [];
            if (null !== $this->entities && \is_array($this->entities)) {
                $n = 0;
                foreach ($this->entities as $item) {
                    $res['entities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->thirdPartId) {
            $res['third_part_id'] = $this->thirdPartId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvoiceRuleAddRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entities'])) {
            if (!empty($map['entities'])) {
                $model->entities = [];
                $n               = 0;
                foreach ($map['entities'] as $item) {
                    $model->entities[$n++] = null !== $item ? entities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['third_part_id'])) {
            $model->thirdPartId = $map['third_part_id'];
        }

        return $model;
    }
}
