<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetContextLogsRequest extends Model
{
    /**
     * @description 指定起始日志往前（上文）的日志条数，取值范围为(0,100]。
     *
     * @var int
     */
    public $backLines;

    /**
     * @description 指定起始日志往后（下文）的日志条数，取值范围为(0,100]。
     *
     * @var int
     */
    public $forwardLines;

    /**
     * @description 起始日志所属的LogGroup的唯一身份标识。
     *
     * @var string
     */
    public $packId;

    /**
     * @description 起始日志在对应LogGroup内的唯一上下文结构标识。
     *
     * @var string
     */
    public $packMeta;

    /**
     * @description Logstore中数据的类型。该接口中该参数固定为context_log。
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
