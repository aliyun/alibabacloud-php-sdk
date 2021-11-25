<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetImageResponseBody\faces;

use AlibabaCloud\Tea\Model;

class emotionDetails extends Model
{
    /**
     * @var float
     */
    public $ANGRY;

    /**
     * @var float
     */
    public $CALM;

    /**
     * @var float
     */
    public $DISGUSTED;

    /**
     * @var float
     */
    public $HAPPY;

    /**
     * @var float
     */
    public $SAD;

    /**
     * @var float
     */
    public $SCARED;

    /**
     * @var float
     */
    public $SURPRISED;
    protected $_name = [
        'ANGRY'     => 'ANGRY',
        'CALM'      => 'CALM',
        'DISGUSTED' => 'DISGUSTED',
        'HAPPY'     => 'HAPPY',
        'SAD'       => 'SAD',
        'SCARED'    => 'SCARED',
        'SURPRISED' => 'SURPRISED',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ANGRY) {
            $res['ANGRY'] = $this->ANGRY;
        }
        if (null !== $this->CALM) {
            $res['CALM'] = $this->CALM;
        }
        if (null !== $this->DISGUSTED) {
            $res['DISGUSTED'] = $this->DISGUSTED;
        }
        if (null !== $this->HAPPY) {
            $res['HAPPY'] = $this->HAPPY;
        }
        if (null !== $this->SAD) {
            $res['SAD'] = $this->SAD;
        }
        if (null !== $this->SCARED) {
            $res['SCARED'] = $this->SCARED;
        }
        if (null !== $this->SURPRISED) {
            $res['SURPRISED'] = $this->SURPRISED;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emotionDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ANGRY'])) {
            $model->ANGRY = $map['ANGRY'];
        }
        if (isset($map['CALM'])) {
            $model->CALM = $map['CALM'];
        }
        if (isset($map['DISGUSTED'])) {
            $model->DISGUSTED = $map['DISGUSTED'];
        }
        if (isset($map['HAPPY'])) {
            $model->HAPPY = $map['HAPPY'];
        }
        if (isset($map['SAD'])) {
            $model->SAD = $map['SAD'];
        }
        if (isset($map['SCARED'])) {
            $model->SCARED = $map['SCARED'];
        }
        if (isset($map['SURPRISED'])) {
            $model->SURPRISED = $map['SURPRISED'];
        }

        return $model;
    }
}
