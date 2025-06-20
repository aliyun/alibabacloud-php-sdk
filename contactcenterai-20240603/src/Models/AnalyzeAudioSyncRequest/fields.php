<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeAudioSyncRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeAudioSyncRequest\fields\enumValues;

class fields extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var enumValues[]
     */
    public $enumValues;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'code' => 'code',
        'desc' => 'desc',
        'enumValues' => 'enumValues',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->enumValues)) {
            Model::validateArray($this->enumValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->enumValues) {
            if (\is_array($this->enumValues)) {
                $res['enumValues'] = [];
                $n1 = 0;
                foreach ($this->enumValues as $item1) {
                    $res['enumValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['enumValues'])) {
            if (!empty($map['enumValues'])) {
                $model->enumValues = [];
                $n1 = 0;
                foreach ($map['enumValues'] as $item1) {
                    $model->enumValues[$n1] = enumValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
