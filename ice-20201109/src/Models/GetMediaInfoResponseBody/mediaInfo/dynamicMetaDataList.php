<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo;

use AlibabaCloud\Tea\Model;

class dynamicMetaDataList extends Model
{
    /**
     * @description 开始时间
     *
     * @var float
     */
    public $in;

    /**
     * @description 结束时间
     *
     * @var float
     */
    public $out;

    /**
     * @description 类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 元数据json string
     *
     * @var string
     */
    public $data;
    protected $_name = [
        'in'   => 'In',
        'out'  => 'Out',
        'type' => 'Type',
        'data' => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->in) {
            $res['In'] = $this->in;
        }
        if (null !== $this->out) {
            $res['Out'] = $this->out;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dynamicMetaDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['In'])) {
            $model->in = $map['In'];
        }
        if (isset($map['Out'])) {
            $model->out = $map['Out'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
