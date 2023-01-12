<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayForPayUrlResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $frontUrl;
    protected $_name = [
        'frontUrl' => 'FrontUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontUrl) {
            $res['FrontUrl'] = $this->frontUrl;
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
        if (isset($map['FrontUrl'])) {
            $model->frontUrl = $map['FrontUrl'];
        }

        return $model;
    }
}
