<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\hit;

use AlibabaCloud\Tea\Model;

class hitKeyWords extends Model
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
     * @var int
     */
    public $cid;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'val'  => 'Val',
        'cid'  => 'Cid',
        'pid'  => 'Pid',
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
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitKeyWords
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
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
