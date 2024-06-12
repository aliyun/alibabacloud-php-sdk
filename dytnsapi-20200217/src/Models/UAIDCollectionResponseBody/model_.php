<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDCollectionResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 示例值
     *
     * @var string
     */
    public $uaid;
    protected $_name = [
        'uaid' => 'Uaid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uaid) {
            $res['Uaid'] = $this->uaid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uaid'])) {
            $model->uaid = $map['Uaid'];
        }

        return $model;
    }
}
