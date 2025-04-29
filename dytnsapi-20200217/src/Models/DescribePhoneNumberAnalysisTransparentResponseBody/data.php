<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisTransparentResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceRisk;

    /**
     * @var string
     */
    public $ipRisk;

    /**
     * @var string
     */
    public $score1;

    /**
     * @var string
     */
    public $score2;

    /**
     * @var string
     */
    public $score3;
    protected $_name = [
        'deviceRisk' => 'Device_risk',
        'ipRisk' => 'Ip_risk',
        'score1' => 'Score1',
        'score2' => 'Score2',
        'score3' => 'Score3',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceRisk) {
            $res['Device_risk'] = $this->deviceRisk;
        }

        if (null !== $this->ipRisk) {
            $res['Ip_risk'] = $this->ipRisk;
        }

        if (null !== $this->score1) {
            $res['Score1'] = $this->score1;
        }

        if (null !== $this->score2) {
            $res['Score2'] = $this->score2;
        }

        if (null !== $this->score3) {
            $res['Score3'] = $this->score3;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device_risk'])) {
            $model->deviceRisk = $map['Device_risk'];
        }

        if (isset($map['Ip_risk'])) {
            $model->ipRisk = $map['Ip_risk'];
        }

        if (isset($map['Score1'])) {
            $model->score1 = $map['Score1'];
        }

        if (isset($map['Score2'])) {
            $model->score2 = $map['Score2'];
        }

        if (isset($map['Score3'])) {
            $model->score3 = $map['Score3'];
        }

        return $model;
    }
}
