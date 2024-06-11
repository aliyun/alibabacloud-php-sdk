<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ListFeatureViewOnlineFeaturesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $onlineFeatures;

    /**
     * @example BF349686-C932-55B5-9B31-DAFA395C0E06
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'onlineFeatures' => 'OnlineFeatures',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineFeatures) {
            $res['OnlineFeatures'] = $this->onlineFeatures;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureViewOnlineFeaturesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineFeatures'])) {
            if (!empty($map['OnlineFeatures'])) {
                $model->onlineFeatures = $map['OnlineFeatures'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
