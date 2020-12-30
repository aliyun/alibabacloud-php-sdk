<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppDailySdkVersionsResponseBody\appDailySdkVersions;
use AlibabaCloud\Tea\Model;

class DescribeAppDailySdkVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appDailySdkVersions[]
     */
    public $appDailySdkVersions;
    protected $_name = [
        'requestId'           => 'RequestId',
        'appDailySdkVersions' => 'AppDailySdkVersions',
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
        if (null !== $this->appDailySdkVersions) {
            $res['AppDailySdkVersions'] = [];
            if (null !== $this->appDailySdkVersions && \is_array($this->appDailySdkVersions)) {
                $n = 0;
                foreach ($this->appDailySdkVersions as $item) {
                    $res['AppDailySdkVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppDailySdkVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppDailySdkVersions'])) {
            if (!empty($map['AppDailySdkVersions'])) {
                $model->appDailySdkVersions = [];
                $n                          = 0;
                foreach ($map['AppDailySdkVersions'] as $item) {
                    $model->appDailySdkVersions[$n++] = null !== $item ? appDailySdkVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
