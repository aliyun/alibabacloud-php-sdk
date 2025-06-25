<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterPerformanceResponseBody\performances;

use AlibabaCloud\Dara\Model;

class series extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $translateKey;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'name' => 'Name',
        'tags' => 'Tags',
        'translateKey' => 'TranslateKey',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->translateKey) {
            $res['TranslateKey'] = $this->translateKey;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = $item1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['TranslateKey'])) {
            $model->translateKey = $map['TranslateKey'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
