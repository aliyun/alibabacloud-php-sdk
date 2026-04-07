<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class signList extends Model
{
    /**
     * @var string[]
     */
    public $signList;
    protected $_name = [
        'signList' => 'SignList',
    ];

    public function validate()
    {
        if (\is_array($this->signList)) {
            Model::validateArray($this->signList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->signList) {
            if (\is_array($this->signList)) {
                $res['SignList'] = [];
                $n1 = 0;
                foreach ($this->signList as $item1) {
                    $res['SignList'][$n1] = $item1;
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
        if (isset($map['SignList'])) {
            if (!empty($map['SignList'])) {
                $model->signList = [];
                $n1 = 0;
                foreach ($map['SignList'] as $item1) {
                    $model->signList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
