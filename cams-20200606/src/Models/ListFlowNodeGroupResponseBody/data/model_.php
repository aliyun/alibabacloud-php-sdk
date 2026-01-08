<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListFlowNodeGroupResponseBody\data;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $publicExtend;
    protected $_name = [
        'code' => 'Code',
        'publicExtend' => 'PublicExtend',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->publicExtend) {
            $res['PublicExtend'] = $this->publicExtend;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['PublicExtend'])) {
            $model->publicExtend = $map['PublicExtend'];
        }

        return $model;
    }
}
