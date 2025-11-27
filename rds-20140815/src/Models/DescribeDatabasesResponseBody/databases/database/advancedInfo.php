<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database;

use AlibabaCloud\Dara\Model;

class advancedInfo extends Model
{
    /**
     * @var mixed[][]
     */
    public $advancedDbProperty;
    protected $_name = [
        'advancedDbProperty' => 'AdvancedDbProperty',
    ];

    public function validate()
    {
        if (\is_array($this->advancedDbProperty)) {
            Model::validateArray($this->advancedDbProperty);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedDbProperty) {
            if (\is_array($this->advancedDbProperty)) {
                $res['AdvancedDbProperty'] = [];
                $n1 = 0;
                foreach ($this->advancedDbProperty as $item1) {
                    if (\is_array($item1)) {
                        $res['AdvancedDbProperty'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['AdvancedDbProperty'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['AdvancedDbProperty'])) {
            if (!empty($map['AdvancedDbProperty'])) {
                $model->advancedDbProperty = [];
                $n1 = 0;
                foreach ($map['AdvancedDbProperty'] as $item1) {
                    if (!empty($item1)) {
                        $model->advancedDbProperty[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->advancedDbProperty[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
