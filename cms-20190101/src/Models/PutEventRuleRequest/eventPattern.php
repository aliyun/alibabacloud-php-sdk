<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest;

use AlibabaCloud\Dara\Model;

class eventPattern extends Model
{
    /**
     * @var string
     */
    public $customFilters;

    /**
     * @var string[]
     */
    public $eventTypeList;

    /**
     * @var string[]
     */
    public $levelList;

    /**
     * @var string[]
     */
    public $nameList;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $SQLFilter;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'customFilters' => 'CustomFilters',
        'eventTypeList' => 'EventTypeList',
        'levelList' => 'LevelList',
        'nameList' => 'NameList',
        'product' => 'Product',
        'SQLFilter' => 'SQLFilter',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
        if (\is_array($this->eventTypeList)) {
            Model::validateArray($this->eventTypeList);
        }
        if (\is_array($this->levelList)) {
            Model::validateArray($this->levelList);
        }
        if (\is_array($this->nameList)) {
            Model::validateArray($this->nameList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customFilters) {
            $res['CustomFilters'] = $this->customFilters;
        }

        if (null !== $this->eventTypeList) {
            if (\is_array($this->eventTypeList)) {
                $res['EventTypeList'] = [];
                $n1 = 0;
                foreach ($this->eventTypeList as $item1) {
                    $res['EventTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->levelList) {
            if (\is_array($this->levelList)) {
                $res['LevelList'] = [];
                $n1 = 0;
                foreach ($this->levelList as $item1) {
                    $res['LevelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nameList) {
            if (\is_array($this->nameList)) {
                $res['NameList'] = [];
                $n1 = 0;
                foreach ($this->nameList as $item1) {
                    $res['NameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->SQLFilter) {
            $res['SQLFilter'] = $this->SQLFilter;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
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
        if (isset($map['CustomFilters'])) {
            $model->customFilters = $map['CustomFilters'];
        }

        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = [];
                $n1 = 0;
                foreach ($map['EventTypeList'] as $item1) {
                    $model->eventTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = [];
                $n1 = 0;
                foreach ($map['LevelList'] as $item1) {
                    $model->levelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = [];
                $n1 = 0;
                foreach ($map['NameList'] as $item1) {
                    $model->nameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['SQLFilter'])) {
            $model->SQLFilter = $map['SQLFilter'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
