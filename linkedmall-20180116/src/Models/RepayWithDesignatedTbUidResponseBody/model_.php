<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayWithDesignatedTbUidResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $frontUrl;

    /**
     * @var bool
     */
    public $isOnlyPaidPoint;
    protected $_name = [
        'app'             => 'App',
        'frontUrl'        => 'FrontUrl',
        'isOnlyPaidPoint' => 'IsOnlyPaidPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->frontUrl) {
            $res['FrontUrl'] = $this->frontUrl;
        }
        if (null !== $this->isOnlyPaidPoint) {
            $res['IsOnlyPaidPoint'] = $this->isOnlyPaidPoint;
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
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['FrontUrl'])) {
            $model->frontUrl = $map['FrontUrl'];
        }
        if (isset($map['IsOnlyPaidPoint'])) {
            $model->isOnlyPaidPoint = $map['IsOnlyPaidPoint'];
        }

        return $model;
    }
}
