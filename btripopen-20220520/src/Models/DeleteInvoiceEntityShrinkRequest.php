<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class DeleteInvoiceEntityShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $delAll;

    /**
     * @var string
     */
    public $entitiesShrink;

    /**
     * @var string
     */
    public $thirdPartId;
    protected $_name = [
        'delAll' => 'del_all',
        'entitiesShrink' => 'entities',
        'thirdPartId' => 'third_part_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delAll) {
            $res['del_all'] = $this->delAll;
        }

        if (null !== $this->entitiesShrink) {
            $res['entities'] = $this->entitiesShrink;
        }

        if (null !== $this->thirdPartId) {
            $res['third_part_id'] = $this->thirdPartId;
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
        if (isset($map['del_all'])) {
            $model->delAll = $map['del_all'];
        }

        if (isset($map['entities'])) {
            $model->entitiesShrink = $map['entities'];
        }

        if (isset($map['third_part_id'])) {
            $model->thirdPartId = $map['third_part_id'];
        }

        return $model;
    }
}
