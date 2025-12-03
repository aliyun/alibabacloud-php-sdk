<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class HarmonyPayload extends Model
{
    /**
     * @var string
     */
    public $displayType;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var HarmonyBody
     */
    public $harmonyBody;
    protected $_name = [
        'displayType' => 'displayType',
        'extra' => 'extra',
        'harmonyBody' => 'harmonyBody',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (null !== $this->harmonyBody) {
            $this->harmonyBody->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayType) {
            $res['displayType'] = $this->displayType;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->harmonyBody) {
            $res['harmonyBody'] = null !== $this->harmonyBody ? $this->harmonyBody->toArray($noStream) : $this->harmonyBody;
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
        if (isset($map['displayType'])) {
            $model->displayType = $map['displayType'];
        }

        if (isset($map['extra'])) {
            if (!empty($map['extra'])) {
                $model->extra = [];
                foreach ($map['extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['harmonyBody'])) {
            $model->harmonyBody = HarmonyBody::fromMap($map['harmonyBody']);
        }

        return $model;
    }
}
