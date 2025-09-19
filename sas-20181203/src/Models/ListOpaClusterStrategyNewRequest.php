<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListOpaClusterStrategyNewRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $imageName;

    /**
     * @var string[]
     */
    public $label;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $strategyName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'imageName' => 'ImageName',
        'label' => 'Label',
        'pageSize' => 'PageSize',
        'strategyName' => 'StrategyName',
    ];

    public function validate()
    {
        if (\is_array($this->imageName)) {
            Model::validateArray($this->imageName);
        }
        if (\is_array($this->label)) {
            Model::validateArray($this->label);
        }
        if (\is_array($this->strategyName)) {
            Model::validateArray($this->strategyName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->imageName) {
            if (\is_array($this->imageName)) {
                $res['ImageName'] = [];
                $n1 = 0;
                foreach ($this->imageName as $item1) {
                    $res['ImageName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            if (\is_array($this->label)) {
                $res['Label'] = [];
                $n1 = 0;
                foreach ($this->label as $item1) {
                    $res['Label'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->strategyName) {
            if (\is_array($this->strategyName)) {
                $res['StrategyName'] = [];
                $n1 = 0;
                foreach ($this->strategyName as $item1) {
                    $res['StrategyName'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['ImageName'])) {
            if (!empty($map['ImageName'])) {
                $model->imageName = [];
                $n1 = 0;
                foreach ($map['ImageName'] as $item1) {
                    $model->imageName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Label'])) {
            if (!empty($map['Label'])) {
                $model->label = [];
                $n1 = 0;
                foreach ($map['Label'] as $item1) {
                    $model->label[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StrategyName'])) {
            if (!empty($map['StrategyName'])) {
                $model->strategyName = [];
                $n1 = 0;
                foreach ($map['StrategyName'] as $item1) {
                    $model->strategyName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
