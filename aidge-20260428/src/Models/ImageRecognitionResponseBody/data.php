<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRecognitionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $borderPixel;

    /**
     * @var bool
     */
    public $noobjCharacter;

    /**
     * @var bool
     */
    public $noobjLogo;

    /**
     * @var bool
     */
    public $noobjNpx;

    /**
     * @var bool
     */
    public $noobjWatermark;

    /**
     * @var bool
     */
    public $objCharacter;

    /**
     * @var bool
     */
    public $objLogo;

    /**
     * @var bool
     */
    public $objNpx;

    /**
     * @var bool
     */
    public $objWatermark;

    /**
     * @var int
     */
    public $pdNum;

    /**
     * @var string
     */
    public $pdProp;

    /**
     * @var string[]
     */
    public $recText;

    /**
     * @var string
     */
    public $textProp;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'borderPixel' => 'BorderPixel',
        'noobjCharacter' => 'NoobjCharacter',
        'noobjLogo' => 'NoobjLogo',
        'noobjNpx' => 'NoobjNpx',
        'noobjWatermark' => 'NoobjWatermark',
        'objCharacter' => 'ObjCharacter',
        'objLogo' => 'ObjLogo',
        'objNpx' => 'ObjNpx',
        'objWatermark' => 'ObjWatermark',
        'pdNum' => 'PdNum',
        'pdProp' => 'PdProp',
        'recText' => 'RecText',
        'textProp' => 'TextProp',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (\is_array($this->recText)) {
            Model::validateArray($this->recText);
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->borderPixel) {
            $res['BorderPixel'] = $this->borderPixel;
        }

        if (null !== $this->noobjCharacter) {
            $res['NoobjCharacter'] = $this->noobjCharacter;
        }

        if (null !== $this->noobjLogo) {
            $res['NoobjLogo'] = $this->noobjLogo;
        }

        if (null !== $this->noobjNpx) {
            $res['NoobjNpx'] = $this->noobjNpx;
        }

        if (null !== $this->noobjWatermark) {
            $res['NoobjWatermark'] = $this->noobjWatermark;
        }

        if (null !== $this->objCharacter) {
            $res['ObjCharacter'] = $this->objCharacter;
        }

        if (null !== $this->objLogo) {
            $res['ObjLogo'] = $this->objLogo;
        }

        if (null !== $this->objNpx) {
            $res['ObjNpx'] = $this->objNpx;
        }

        if (null !== $this->objWatermark) {
            $res['ObjWatermark'] = $this->objWatermark;
        }

        if (null !== $this->pdNum) {
            $res['PdNum'] = $this->pdNum;
        }

        if (null !== $this->pdProp) {
            $res['PdProp'] = $this->pdProp;
        }

        if (null !== $this->recText) {
            if (\is_array($this->recText)) {
                $res['RecText'] = [];
                $n1 = 0;
                foreach ($this->recText as $item1) {
                    $res['RecText'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textProp) {
            $res['TextProp'] = $this->textProp;
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
                }
            }
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
        if (isset($map['BorderPixel'])) {
            $model->borderPixel = $map['BorderPixel'];
        }

        if (isset($map['NoobjCharacter'])) {
            $model->noobjCharacter = $map['NoobjCharacter'];
        }

        if (isset($map['NoobjLogo'])) {
            $model->noobjLogo = $map['NoobjLogo'];
        }

        if (isset($map['NoobjNpx'])) {
            $model->noobjNpx = $map['NoobjNpx'];
        }

        if (isset($map['NoobjWatermark'])) {
            $model->noobjWatermark = $map['NoobjWatermark'];
        }

        if (isset($map['ObjCharacter'])) {
            $model->objCharacter = $map['ObjCharacter'];
        }

        if (isset($map['ObjLogo'])) {
            $model->objLogo = $map['ObjLogo'];
        }

        if (isset($map['ObjNpx'])) {
            $model->objNpx = $map['ObjNpx'];
        }

        if (isset($map['ObjWatermark'])) {
            $model->objWatermark = $map['ObjWatermark'];
        }

        if (isset($map['PdNum'])) {
            $model->pdNum = $map['PdNum'];
        }

        if (isset($map['PdProp'])) {
            $model->pdProp = $map['PdProp'];
        }

        if (isset($map['RecText'])) {
            if (!empty($map['RecText'])) {
                $model->recText = [];
                $n1 = 0;
                foreach ($map['RecText'] as $item1) {
                    $model->recText[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TextProp'])) {
            $model->textProp = $map['TextProp'];
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
