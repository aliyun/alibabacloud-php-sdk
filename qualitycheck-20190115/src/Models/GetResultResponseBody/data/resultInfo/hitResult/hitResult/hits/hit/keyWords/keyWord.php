<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit\keyWords;

use AlibabaCloud\Tea\Model;

class keyWord extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $val;

    /**
     * @var string
     */
    public $cid;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'val'  => 'Val',
        'cid'  => 'Cid',
        'to'   => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->val) {
            $res['Val'] = $this->val;
        }
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Val'])) {
            $model->val = $map['Val'];
        }
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
