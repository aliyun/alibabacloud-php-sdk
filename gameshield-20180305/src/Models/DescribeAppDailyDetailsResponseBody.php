<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppDailyDetailsResponseBody\appDailyDetails;
use AlibabaCloud\Tea\Model;

class DescribeAppDailyDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appDailyDetails[]
     */
    public $appDailyDetails;
    protected $_name = [
        'requestId'       => 'RequestId',
        'appDailyDetails' => 'AppDailyDetails',
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
        if (null !== $this->appDailyDetails) {
            $res['AppDailyDetails'] = [];
            if (null !== $this->appDailyDetails && \is_array($this->appDailyDetails)) {
                $n = 0;
                foreach ($this->appDailyDetails as $item) {
                    $res['AppDailyDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppDailyDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppDailyDetails'])) {
            if (!empty($map['AppDailyDetails'])) {
                $model->appDailyDetails = [];
                $n                      = 0;
                foreach ($map['AppDailyDetails'] as $item) {
                    $model->appDailyDetails[$n++] = null !== $item ? appDailyDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
