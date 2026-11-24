<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\translation;

use AlibabaCloud\Dara\Model;

class corpus extends Model
{
    /**
     * @var string[]
     */
    public $phrases;
    protected $_name = [
        'phrases' => 'phrases',
    ];

    public function validate()
    {
        if (\is_array($this->phrases)) {
            Model::validateArray($this->phrases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phrases) {
            if (\is_array($this->phrases)) {
                $res['phrases'] = [];
                foreach ($this->phrases as $key1 => $value1) {
                    $res['phrases'][$key1] = $value1;
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
        if (isset($map['phrases'])) {
            if (!empty($map['phrases'])) {
                $model->phrases = [];
                foreach ($map['phrases'] as $key1 => $value1) {
                    $model->phrases[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
