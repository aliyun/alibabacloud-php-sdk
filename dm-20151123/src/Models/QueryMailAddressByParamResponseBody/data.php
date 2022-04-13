<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryMailAddressByParamResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\QueryMailAddressByParamResponseBody\data\mailAddress;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mailAddress) {
            $res['mailAddress'] = [];
            if (null !== $this->mailAddress && \is_array($this->mailAddress)) {
                $n = 0;
                foreach ($this->mailAddress as $item) {
                    $res['mailAddress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mailAddress'])) {
            if (!empty($map['mailAddress'])) {
                $model->mailAddress = [];
                $n                  = 0;
                foreach ($map['mailAddress'] as $item) {
                    $model->mailAddress[$n++] = null !== $item ? mailAddress::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
