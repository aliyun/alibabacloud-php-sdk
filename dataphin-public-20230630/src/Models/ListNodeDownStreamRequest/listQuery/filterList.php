<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest\listQuery;

use AlibabaCloud\Dara\Model;

class filterList extends Model
{
    /**
     * @var bool
     */
    public $exclude;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string[]
     */
    public $valueList;
    protected $_name = [
        'exclude' => 'Exclude',
        'key' => 'Key',
        'valueList' => 'ValueList',
    ];

    public function validate()
    {
        if (\is_array($this->valueList)) {
            Model::validateArray($this->valueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->valueList) {
            if (\is_array($this->valueList)) {
                $res['ValueList'] = [];
                $n1 = 0;
                foreach ($this->valueList as $item1) {
                    $res['ValueList'][$n1++] = $item1;
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
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['ValueList'])) {
            if (!empty($map['ValueList'])) {
                $model->valueList = [];
                $n1 = 0;
                foreach ($map['ValueList'] as $item1) {
                    $model->valueList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
