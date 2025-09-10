<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponseBody\policy\entityGroup\entityRules;

use AlibabaCloud\Dara\Model;

class annotations extends Model
{
    /**
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'op' => 'op',
        'tagKey' => 'tagKey',
        'tagValues' => 'tagValues',
    ];

    public function validate()
    {
        if (\is_array($this->tagValues)) {
            Model::validateArray($this->tagValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->op) {
            $res['op'] = $this->op;
        }

        if (null !== $this->tagKey) {
            $res['tagKey'] = $this->tagKey;
        }

        if (null !== $this->tagValues) {
            if (\is_array($this->tagValues)) {
                $res['tagValues'] = [];
                $n1 = 0;
                foreach ($this->tagValues as $item1) {
                    $res['tagValues'][$n1] = $item1;
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
        if (isset($map['op'])) {
            $model->op = $map['op'];
        }

        if (isset($map['tagKey'])) {
            $model->tagKey = $map['tagKey'];
        }

        if (isset($map['tagValues'])) {
            if (!empty($map['tagValues'])) {
                $model->tagValues = [];
                $n1 = 0;
                foreach ($map['tagValues'] as $item1) {
                    $model->tagValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
