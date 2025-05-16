<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenLC\lesion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenLC\lesion\lesionList\scoreAllClasses;

class lesionList extends Model
{
    /**
     * @var float[]
     */
    public $diameter;

    /**
     * @var int
     */
    public $keySlice;

    /**
     * @var float
     */
    public $malignancy;

    /**
     * @var float[]
     */
    public $recistEndpoints;

    /**
     * @var scoreAllClasses
     */
    public $scoreAllClasses;

    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $volume;
    protected $_name = [
        'diameter' => 'Diameter',
        'keySlice' => 'KeySlice',
        'malignancy' => 'Malignancy',
        'recistEndpoints' => 'RecistEndpoints',
        'scoreAllClasses' => 'ScoreAllClasses',
        'type' => 'Type',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        if (\is_array($this->diameter)) {
            Model::validateArray($this->diameter);
        }
        if (\is_array($this->recistEndpoints)) {
            Model::validateArray($this->recistEndpoints);
        }
        if (null !== $this->scoreAllClasses) {
            $this->scoreAllClasses->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diameter) {
            if (\is_array($this->diameter)) {
                $res['Diameter'] = [];
                $n1 = 0;
                foreach ($this->diameter as $item1) {
                    $res['Diameter'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keySlice) {
            $res['KeySlice'] = $this->keySlice;
        }

        if (null !== $this->malignancy) {
            $res['Malignancy'] = $this->malignancy;
        }

        if (null !== $this->recistEndpoints) {
            if (\is_array($this->recistEndpoints)) {
                $res['RecistEndpoints'] = [];
                $n1 = 0;
                foreach ($this->recistEndpoints as $item1) {
                    $res['RecistEndpoints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scoreAllClasses) {
            $res['ScoreAllClasses'] = null !== $this->scoreAllClasses ? $this->scoreAllClasses->toArray($noStream) : $this->scoreAllClasses;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['Diameter'])) {
            if (!empty($map['Diameter'])) {
                $model->diameter = [];
                $n1 = 0;
                foreach ($map['Diameter'] as $item1) {
                    $model->diameter[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeySlice'])) {
            $model->keySlice = $map['KeySlice'];
        }

        if (isset($map['Malignancy'])) {
            $model->malignancy = $map['Malignancy'];
        }

        if (isset($map['RecistEndpoints'])) {
            if (!empty($map['RecistEndpoints'])) {
                $model->recistEndpoints = [];
                $n1 = 0;
                foreach ($map['RecistEndpoints'] as $item1) {
                    $model->recistEndpoints[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScoreAllClasses'])) {
            $model->scoreAllClasses = scoreAllClasses::fromMap($map['ScoreAllClasses']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
