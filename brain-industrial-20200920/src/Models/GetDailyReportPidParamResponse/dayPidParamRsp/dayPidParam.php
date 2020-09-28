<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportPidParamResponse\dayPidParamRsp;

use AlibabaCloud\Tea\Model;

class dayPidParam extends Model
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

    /**
     * @var float
     */
    public $recommendIndex;
    protected $_name = [
        'kp'             => 'Kp',
        'ti'             => 'Ti',
        'td'             => 'Td',
        'recommendIndex' => 'RecommendIndex',
    ];

    public function validate()
    {
        Model::validateRequired('kp', $this->kp, true);
        Model::validateRequired('ti', $this->ti, true);
        Model::validateRequired('td', $this->td, true);
        Model::validateRequired('recommendIndex', $this->recommendIndex, true);
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
        if (null !== $this->recommendIndex) {
            $res['RecommendIndex'] = $this->recommendIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dayPidParam
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
        if (isset($map['RecommendIndex'])) {
            $model->recommendIndex = $map['RecommendIndex'];
        }

        return $model;
    }
}
