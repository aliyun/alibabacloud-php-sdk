<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class SetCardStopRuleRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRestore;

    /**
     * @example 100
     *
     * @var int
     */
    public $flowLimit;

    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;
    protected $_name = [
        'autoRestore' => 'AutoRestore',
        'flowLimit'   => 'FlowLimit',
        'iccid'       => 'Iccid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRestore) {
            $res['AutoRestore'] = $this->autoRestore;
        }
        if (null !== $this->flowLimit) {
            $res['FlowLimit'] = $this->flowLimit;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCardStopRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRestore'])) {
            $model->autoRestore = $map['AutoRestore'];
        }
        if (isset($map['FlowLimit'])) {
            $model->flowLimit = $map['FlowLimit'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }

        return $model;
    }
}
