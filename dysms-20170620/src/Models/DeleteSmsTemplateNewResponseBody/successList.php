<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteSmsTemplateNewResponseBody;

use AlibabaCloud\Dara\Model;

class successList extends Model
{
    /**
     * @var string[]
     */
    public $succes;
    protected $_name = [
        'succes' => 'Succes',
    ];

    public function validate()
    {
        if (\is_array($this->succes)) {
            Model::validateArray($this->succes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->succes) {
            if (\is_array($this->succes)) {
                $res['Succes'] = [];
                $n1 = 0;
                foreach ($this->succes as $item1) {
                    $res['Succes'][$n1] = $item1;
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
        if (isset($map['Succes'])) {
            if (!empty($map['Succes'])) {
                $model->succes = [];
                $n1 = 0;
                foreach ($map['Succes'] as $item1) {
                    $model->succes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
