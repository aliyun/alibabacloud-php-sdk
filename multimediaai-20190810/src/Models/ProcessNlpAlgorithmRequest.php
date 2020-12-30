<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class ProcessNlpAlgorithmRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'appKey' => 'AppKey',
        'data'   => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProcessNlpAlgorithmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
