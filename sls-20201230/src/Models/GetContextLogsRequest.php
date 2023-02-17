<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetContextLogsRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $backLines;

    /**
     * @example 10
     *
     * @var int
     */
    public $forwardLines;

    /**
     * @example 85C897C740352DC6-808
     *
     * @var string
     */
    public $packId;

    /**
     * @example 2|MTY1NTcwNTUzODY5MTY0MDk1Mg==|3|0
     *
     * @var string
     */
    public $packMeta;

    /**
     * @example context_log
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'backLines'    => 'back_lines',
        'forwardLines' => 'forward_lines',
        'packId'       => 'pack_id',
        'packMeta'     => 'pack_meta',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetContextLogsRequest
     */
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
