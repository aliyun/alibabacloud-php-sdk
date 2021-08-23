<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasButtonListDTO extends Model
{
    /**
     * @description Button
     *
     * @var PaasButtonDTO[]
     */
    public $button;

    /**
     * @description Intro
     *
     * @var string
     */
    public $intro;
    protected $_name = [
        'button' => 'Button',
        'intro'  => 'Intro',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->button) {
            $res['Button'] = [];
            if (null !== $this->button && \is_array($this->button)) {
                $n = 0;
                foreach ($this->button as $item) {
                    $res['Button'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasButtonListDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Button'])) {
            if (!empty($map['Button'])) {
                $model->button = [];
                $n             = 0;
                foreach ($map['Button'] as $item) {
                    $model->button[$n++] = null !== $item ? PaasButtonDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }

        return $model;
    }
}
