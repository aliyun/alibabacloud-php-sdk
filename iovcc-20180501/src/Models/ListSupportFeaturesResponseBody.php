<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListSupportFeaturesResponseBody\supportFeatures;
use AlibabaCloud\Tea\Model;

class ListSupportFeaturesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var supportFeatures[]
     */
    public $supportFeatures;
    protected $_name = [
        'requestId'       => 'RequestId',
        'supportFeatures' => 'SupportFeatures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportFeatures) {
            $res['SupportFeatures'] = [];
            if (null !== $this->supportFeatures && \is_array($this->supportFeatures)) {
                $n = 0;
                foreach ($this->supportFeatures as $item) {
                    $res['SupportFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSupportFeaturesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportFeatures'])) {
            if (!empty($map['SupportFeatures'])) {
                $model->supportFeatures = [];
                $n                      = 0;
                foreach ($map['SupportFeatures'] as $item) {
                    $model->supportFeatures[$n++] = null !== $item ? supportFeatures::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
