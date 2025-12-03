<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class IosPayload extends Model
{
    /**
     * @var Aps
     */
    public $aps;

    /**
     * @var mixed[]
     */
    public $extra;
    protected $_name = [
        'aps' => 'aps',
        'extra' => 'extra',
    ];

    public function validate()
    {
        if (null !== $this->aps) {
            $this->aps->validate();
        }
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aps) {
            $res['aps'] = null !== $this->aps ? $this->aps->toArray($noStream) : $this->aps;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['extra'][$key1] = $value1;
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
        if (isset($map['aps'])) {
            $model->aps = Aps::fromMap($map['aps']);
        }

        if (isset($map['extra'])) {
            if (!empty($map['extra'])) {
                $model->extra = [];
                foreach ($map['extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
