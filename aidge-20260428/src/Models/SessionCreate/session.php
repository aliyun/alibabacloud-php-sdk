<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionCreate;

use AlibabaCloud\Dara\Model;

class session extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string[]
     */
    public $languagePair;
    protected $_name = [
        'mode' => 'mode',
        'languagePair' => 'language_pair',
    ];

    public function validate()
    {
        if (\is_array($this->languagePair)) {
            Model::validateArray($this->languagePair);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->languagePair) {
            if (\is_array($this->languagePair)) {
                $res['language_pair'] = [];
                $n1 = 0;
                foreach ($this->languagePair as $item1) {
                    $res['language_pair'][$n1] = $item1;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['language_pair'])) {
            if (!empty($map['language_pair'])) {
                $model->languagePair = [];
                $n1 = 0;
                foreach ($map['language_pair'] as $item1) {
                    $model->languagePair[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
