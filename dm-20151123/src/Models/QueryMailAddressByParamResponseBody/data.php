<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryMailAddressByParamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryMailAddressByParamResponseBody\data\mailAddress;

class data extends Model
{
    /**
     * @var mailAddress[]
     */
    public $mailAddress;
    protected $_name = [
        'mailAddress' => 'mailAddress',
    ];

    public function validate()
    {
        if (\is_array($this->mailAddress)) {
            Model::validateArray($this->mailAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mailAddress) {
            if (\is_array($this->mailAddress)) {
                $res['mailAddress'] = [];
                $n1 = 0;
                foreach ($this->mailAddress as $item1) {
                    $res['mailAddress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['mailAddress'])) {
            if (!empty($map['mailAddress'])) {
                $model->mailAddress = [];
                $n1 = 0;
                foreach ($map['mailAddress'] as $item1) {
                    $model->mailAddress[$n1++] = mailAddress::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
