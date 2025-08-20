<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\bypassConfig;

use AlibabaCloud\Dara\Model;

class urlBypassRules extends Model
{
    /**
     * @var string[]
     */
    public $froms;

    /**
     * @var string[]
     */
    public $paths;
    protected $_name = [
        'froms' => 'Froms',
        'paths' => 'Paths',
    ];

    public function validate()
    {
        if (\is_array($this->froms)) {
            Model::validateArray($this->froms);
        }
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->froms) {
            if (\is_array($this->froms)) {
                $res['Froms'] = [];
                $n1 = 0;
                foreach ($this->froms as $item1) {
                    $res['Froms'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = $item1;
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
        if (isset($map['Froms'])) {
            if (!empty($map['Froms'])) {
                $model->froms = [];
                $n1 = 0;
                foreach ($map['Froms'] as $item1) {
                    $model->froms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
