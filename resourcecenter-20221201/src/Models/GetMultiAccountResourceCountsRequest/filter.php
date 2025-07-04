<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceCountsRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string[]
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'matchType' => 'MatchType',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['Value'] = [];
                $n1 = 0;
                foreach ($this->value as $item1) {
                    $res['Value'][$n1] = $item1;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n1 = 0;
                foreach ($map['Value'] as $item1) {
                    $model->value[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
