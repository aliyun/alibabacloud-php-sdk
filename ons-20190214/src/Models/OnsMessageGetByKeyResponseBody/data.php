<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByKeyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByKeyResponseBody\data\onsRestMessageDo;

class data extends Model
{
    /**
     * @var onsRestMessageDo[]
     */
    public $onsRestMessageDo;
    protected $_name = [
        'onsRestMessageDo' => 'OnsRestMessageDo',
    ];

    public function validate()
    {
        if (\is_array($this->onsRestMessageDo)) {
            Model::validateArray($this->onsRestMessageDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onsRestMessageDo) {
            if (\is_array($this->onsRestMessageDo)) {
                $res['OnsRestMessageDo'] = [];
                $n1 = 0;
                foreach ($this->onsRestMessageDo as $item1) {
                    $res['OnsRestMessageDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OnsRestMessageDo'])) {
            if (!empty($map['OnsRestMessageDo'])) {
                $model->onsRestMessageDo = [];
                $n1 = 0;
                foreach ($map['OnsRestMessageDo'] as $item1) {
                    $model->onsRestMessageDo[$n1] = onsRestMessageDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
