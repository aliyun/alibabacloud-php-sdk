<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\PIdResetParam;

use AlibabaCloud\Tea\Model;

class manualCtrl extends Model
{
    /**
     * @var float
     */
    public $kp;

    /**
     * @var float
     */
    public $ti;

    /**
     * @var float
     */
    public $td;
    protected $_name = [
        'kp' => 'Kp',
        'ti' => 'Ti',
        'td' => 'Td',
    ];

    public function validate()
    {
        Model::validateRequired('kp', $this->kp, true);
        Model::validateRequired('ti', $this->ti, true);
        Model::validateRequired('td', $this->td, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kp) {
            $res['Kp'] = $this->kp;
        }
        if (null !== $this->ti) {
            $res['Ti'] = $this->ti;
        }
        if (null !== $this->td) {
            $res['Td'] = $this->td;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manualCtrl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Kp'])) {
            $model->kp = $map['Kp'];
        }
        if (isset($map['Ti'])) {
            $model->ti = $map['Ti'];
        }
        if (isset($map['Td'])) {
            $model->td = $map['Td'];
        }

        return $model;
    }
}
