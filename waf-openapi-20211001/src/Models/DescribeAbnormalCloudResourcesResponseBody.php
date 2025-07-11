<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesResponseBody\abnormalCloudResources;
use AlibabaCloud\Tea\Model;

class DescribeAbnormalCloudResourcesResponseBody extends Model
{
    /**
     * @var abnormalCloudResources[]
     */
    public $abnormalCloudResources;

    /**
     * @description Id of the request
     *
     * @example 66A98669-CC6E-4F3E-80A6-***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnormalCloudResources' => 'AbnormalCloudResources',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalCloudResources) {
            $res['AbnormalCloudResources'] = [];
            if (null !== $this->abnormalCloudResources && \is_array($this->abnormalCloudResources)) {
                $n = 0;
                foreach ($this->abnormalCloudResources as $item) {
                    $res['AbnormalCloudResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAbnormalCloudResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalCloudResources'])) {
            if (!empty($map['AbnormalCloudResources'])) {
                $model->abnormalCloudResources = [];
                $n = 0;
                foreach ($map['AbnormalCloudResources'] as $item) {
                    $model->abnormalCloudResources[$n++] = null !== $item ? abnormalCloudResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
