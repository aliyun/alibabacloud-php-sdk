<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetContextLogsRequest extends Model
{
    /**
     * @description The number of logs that you want to obtain and are generated before the generation time of the start log. Valid values: (0,100].
     *
     * @example 10
     *
     * @var int
     */
    public $backLines;

    /**
     * @description The number of logs that you want to obtain and are generated after the generation time of the start log. Valid values: (0,100].
     *
     * @example 10
     *
     * @var int
     */
    public $forwardLines;

    /**
     * @description The unique identifier of the log group to which the start log belongs.
     *
     * @example 85C897C740352DC6-808
     *
     * @var string
     */
    public $packId;

    /**
     * @description The unique context identifier of the start log in the log group.
     *
     * @example 2|MTY1NTcwNTUzODY5MTY0MDk1Mg==|3|0
     *
     * @var string
     */
    public $packMeta;

    /**
     * @description The type of the data in the Logstore. Set the value to context_log.
     *
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
