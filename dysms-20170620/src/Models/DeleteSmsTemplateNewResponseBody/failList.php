<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteSmsTemplateNewResponseBody;

use AlibabaCloud\Dara\Model;

class failList extends Model
{
    /**
     * @var string[]
     */
    public $fail;
    protected $_name = [
        'fail' => 'Fail',
    ];

    public function validate()
    {
        if (\is_array($this->fail)) {
            Model::validateArray($this->fail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fail) {
            if (\is_array($this->fail)) {
                $res['Fail'] = [];
                $n1 = 0;
                foreach ($this->fail as $item1) {
                    $res['Fail'][$n1] = $item1;
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
        if (isset($map['Fail'])) {
            if (!empty($map['Fail'])) {
                $model->fail = [];
                $n1 = 0;
                foreach ($map['Fail'] as $item1) {
                    $model->fail[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
