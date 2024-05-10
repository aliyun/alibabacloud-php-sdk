<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityRequest\entities;
use AlibabaCloud\Tea\Model;

class DeleteInvoiceEntityRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $delAll;

    /**
     * @var entities[]
     */
    public $entities;

    /**
     * @description This parameter is required.
     *
     * @example 340049
     *
     * @var string
     */
    public $thirdPartId;
    protected $_name = [
        'delAll'      => 'del_all',
        'entities'    => 'entities',
        'thirdPartId' => 'third_part_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delAll) {
            $res['del_all'] = $this->delAll;
        }
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
     * @return DeleteInvoiceEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['del_all'])) {
            $model->delAll = $map['del_all'];
        }
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
