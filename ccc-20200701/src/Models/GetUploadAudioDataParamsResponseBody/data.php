<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetUploadAudioDataParamsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $paramsStr;
    protected $_name = [
        'paramsStr' => 'ParamsStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramsStr) {
            $res['ParamsStr'] = $this->paramsStr;
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
        if (isset($map['ParamsStr'])) {
            $model->paramsStr = $map['ParamsStr'];
        }

        return $model;
    }
}
