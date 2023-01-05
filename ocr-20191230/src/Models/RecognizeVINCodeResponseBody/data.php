<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVINCodeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example LVBB2FAF777999888
     *
     * @var string
     */
    public $vinCode;
    protected $_name = [
        'vinCode' => 'VinCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vinCode) {
            $res['VinCode'] = $this->vinCode;
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
        if (isset($map['VinCode'])) {
            $model->vinCode = $map['VinCode'];
        }

        return $model;
    }
}
