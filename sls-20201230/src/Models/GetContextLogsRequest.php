<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetContextLogsRequest extends Model
{
    /**
     * @var int
     */
    public $backLines;

    /**
     * @var int
     */
    public $forwardLines;

    /**
     * @var string
     */
    public $packId;

    /**
     * @var string
     */
    public $packMeta;
    protected $_name = [
        'backLines' => 'back_lines',
        'forwardLines' => 'forward_lines',
        'packId' => 'pack_id',
        'packMeta' => 'pack_meta',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backLines) {
            $res['back_lines'] = $this->backLines;
        }

        if (null !== $this->forwardLines) {
            $res['forward_lines'] = $this->forwardLines;
        }

        if (null !== $this->packId) {
            $res['pack_id'] = $this->packId;
        }

        if (null !== $this->packMeta) {
            $res['pack_meta'] = $this->packMeta;
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
        if (isset($map['back_lines'])) {
            $model->backLines = $map['back_lines'];
        }

        if (isset($map['forward_lines'])) {
            $model->forwardLines = $map['forward_lines'];
        }

        if (isset($map['pack_id'])) {
            $model->packId = $map['pack_id'];
        }

        if (isset($map['pack_meta'])) {
            $model->packMeta = $map['pack_meta'];
        }

        return $model;
    }
}
