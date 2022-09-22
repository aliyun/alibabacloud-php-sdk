<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\Tea\Model;

class priceWarning extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $msg;
    protected $_name = [
        'code' => 'Code',
        'msg'  => 'Msg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceWarning
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        return $model;
    }
}
