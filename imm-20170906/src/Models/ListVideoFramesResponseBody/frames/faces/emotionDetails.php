<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesResponseBody\frames\faces;

use AlibabaCloud\Tea\Model;

class emotionDetails extends Model
{
    /**
     * @var float
     */
    public $HAPPY;

    /**
     * @var float
     */
    public $SURPRISED;

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
    public $ANGRY;

    /**
     * @var float
     */
    public $SAD;

    /**
     * @var float
     */
    public $SCARED;
    protected $_name = [
        'HAPPY'     => 'HAPPY',
        'SURPRISED' => 'SURPRISED',
        'CALM'      => 'CALM',
        'DISGUSTED' => 'DISGUSTED',
        'ANGRY'     => 'ANGRY',
        'SAD'       => 'SAD',
        'SCARED'    => 'SCARED',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->HAPPY) {
            $res['HAPPY'] = $this->HAPPY;
        }
        if (null !== $this->SURPRISED) {
            $res['SURPRISED'] = $this->SURPRISED;
        }
        if (null !== $this->CALM) {
            $res['CALM'] = $this->CALM;
        }
        if (null !== $this->DISGUSTED) {
            $res['DISGUSTED'] = $this->DISGUSTED;
        }
        if (null !== $this->ANGRY) {
            $res['ANGRY'] = $this->ANGRY;
        }
        if (null !== $this->SAD) {
            $res['SAD'] = $this->SAD;
        }
        if (null !== $this->SCARED) {
            $res['SCARED'] = $this->SCARED;
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
        if (isset($map['HAPPY'])) {
            $model->HAPPY = $map['HAPPY'];
        }
        if (isset($map['SURPRISED'])) {
            $model->SURPRISED = $map['SURPRISED'];
        }
        if (isset($map['CALM'])) {
            $model->CALM = $map['CALM'];
        }
        if (isset($map['DISGUSTED'])) {
            $model->DISGUSTED = $map['DISGUSTED'];
        }
        if (isset($map['ANGRY'])) {
            $model->ANGRY = $map['ANGRY'];
        }
        if (isset($map['SAD'])) {
            $model->SAD = $map['SAD'];
        }
        if (isset($map['SCARED'])) {
            $model->SCARED = $map['SCARED'];
        }

        return $model;
    }
}
