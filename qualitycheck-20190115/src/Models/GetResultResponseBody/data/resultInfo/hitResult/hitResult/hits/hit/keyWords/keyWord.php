<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit\keyWords;

use AlibabaCloud\Tea\Model;

class keyWord extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $cid;

    /**
     * @example 1
     *
     * @var int
     */
    public $from;

    /**
     * @example 2
     *
     * @var int
     */
    public $to;

    /**
     * @example test
     *
     * @var string
     */
    public $val;
    protected $_name = [
        'cid' => 'Cid',
        'from' => 'From',
        'to' => 'To',
        'val' => 'Val',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->val) {
            $res['Val'] = $this->val;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyWord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Val'])) {
            $model->val = $map['Val'];
        }

        return $model;
    }
}
