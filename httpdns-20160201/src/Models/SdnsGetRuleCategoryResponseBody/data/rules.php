<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsGetRuleCategoryResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsGetRuleCategoryResponseBody\data\rules\records;

class rules extends Model
{
    /**
     * @var string[]
     */
    public $argKeys;

    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string
     */
    public $name;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @var int
     */
    public $resultMode;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'argKeys' => 'ArgKeys',
        'args' => 'Args',
        'name' => 'Name',
        'records' => 'Records',
        'resultMode' => 'ResultMode',
        'ttl' => 'Ttl',
    ];

    public function validate()
    {
        if (\is_array($this->argKeys)) {
            Model::validateArray($this->argKeys);
        }
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argKeys) {
            if (\is_array($this->argKeys)) {
                $res['ArgKeys'] = [];
                $n1 = 0;
                foreach ($this->argKeys as $item1) {
                    $res['ArgKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['Args'] = [];
                foreach ($this->args as $key1 => $value1) {
                    $res['Args'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['Records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['Records'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultMode) {
            $res['ResultMode'] = $this->resultMode;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
        if (isset($map['ArgKeys'])) {
            if (!empty($map['ArgKeys'])) {
                $model->argKeys = [];
                $n1 = 0;
                foreach ($map['ArgKeys'] as $item1) {
                    $model->argKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = [];
                foreach ($map['Args'] as $key1 => $value1) {
                    $model->args[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['Records'] as $item1) {
                    $model->records[$n1] = records::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultMode'])) {
            $model->resultMode = $map['ResultMode'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
