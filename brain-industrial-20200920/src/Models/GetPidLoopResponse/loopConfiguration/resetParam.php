<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration;

use AlibabaCloud\Tea\Model;

class resetParam extends Model
{
    /**
     * @var int
     */
    public $ctrlMode;

    /**
     * @var int
     */
    public $ctrlStuc;
    protected $_name = [
        'ctrlMode' => 'CtrlMode',
        'ctrlStuc' => 'CtrlStuc',
    ];

    public function validate()
    {
        Model::validateRequired('ctrlMode', $this->ctrlMode, true);
        Model::validateRequired('ctrlStuc', $this->ctrlStuc, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ctrlMode) {
            $res['CtrlMode'] = $this->ctrlMode;
        }
        if (null !== $this->ctrlStuc) {
            $res['CtrlStuc'] = $this->ctrlStuc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resetParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CtrlMode'])) {
            $model->ctrlMode = $map['CtrlMode'];
        }
        if (isset($map['CtrlStuc'])) {
            $model->ctrlStuc = $map['CtrlStuc'];
        }

        return $model;
    }
}
