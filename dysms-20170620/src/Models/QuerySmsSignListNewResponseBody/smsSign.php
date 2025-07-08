<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign\smsSign;

class smsSign extends Model
{
    /**
     * @var smsSign[]
     */
    public $smsSign;
    protected $_name = [
        'smsSign' => 'SmsSign',
    ];

    public function validate()
    {
        if (\is_array($this->smsSign)) {
            Model::validateArray($this->smsSign);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smsSign) {
            if (\is_array($this->smsSign)) {
                $res['SmsSign'] = [];
                $n1 = 0;
                foreach ($this->smsSign as $item1) {
                    $res['SmsSign'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SmsSign'])) {
            if (!empty($map['SmsSign'])) {
                $model->smsSign = [];
                $n1 = 0;
                foreach ($map['SmsSign'] as $item1) {
                    $model->smsSign[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
