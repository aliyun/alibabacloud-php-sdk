<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenEc\lesion;

use AlibabaCloud\Dara\Model;

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
     * @var int[][]
     */
    public $ROIEndpoints;

    /**
     * @var int[][]
     */
    public $recistEndpoints;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'diameter' => 'Diameter',
        'keySlice' => 'KeySlice',
        'ROIEndpoints' => 'ROIEndpoints',
        'recistEndpoints' => 'RecistEndpoints',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->diameter)) {
            Model::validateArray($this->diameter);
        }
        if (\is_array($this->ROIEndpoints)) {
            Model::validateArray($this->ROIEndpoints);
        }
        if (\is_array($this->recistEndpoints)) {
            Model::validateArray($this->recistEndpoints);
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

        if (null !== $this->ROIEndpoints) {
            if (\is_array($this->ROIEndpoints)) {
                $res['ROIEndpoints'] = [];
                $n1 = 0;
                foreach ($this->ROIEndpoints as $item1) {
                    if (\is_array($item1)) {
                        $res['ROIEndpoints'][$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ROIEndpoints'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->recistEndpoints) {
            if (\is_array($this->recistEndpoints)) {
                $res['RecistEndpoints'] = [];
                $n1 = 0;
                foreach ($this->recistEndpoints as $item1) {
                    if (\is_array($item1)) {
                        $res['RecistEndpoints'][$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['RecistEndpoints'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['ROIEndpoints'])) {
            if (!empty($map['ROIEndpoints'])) {
                $model->ROIEndpoints = [];
                $n1 = 0;
                foreach ($map['ROIEndpoints'] as $item1) {
                    if (!empty($item1)) {
                        $model->ROIEndpoints[$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->ROIEndpoints[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['RecistEndpoints'])) {
            if (!empty($map['RecistEndpoints'])) {
                $model->recistEndpoints = [];
                $n1 = 0;
                foreach ($map['RecistEndpoints'] as $item1) {
                    if (!empty($item1)) {
                        $model->recistEndpoints[$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->recistEndpoints[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
