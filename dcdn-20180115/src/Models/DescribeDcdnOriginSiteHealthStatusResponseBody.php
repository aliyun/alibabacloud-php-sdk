<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOriginSiteHealthStatusResponseBody\originSiteStatus;
use AlibabaCloud\Tea\Model;

class DescribeDcdnOriginSiteHealthStatusResponseBody extends Model
{
    /**
     * @var originSiteStatus[]
     */
    public $originSiteStatus;

    /**
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'originSiteStatus' => 'OriginSiteStatus',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originSiteStatus) {
            $res['OriginSiteStatus'] = [];
            if (null !== $this->originSiteStatus && \is_array($this->originSiteStatus)) {
                $n = 0;
                foreach ($this->originSiteStatus as $item) {
                    $res['OriginSiteStatus'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDcdnOriginSiteHealthStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginSiteStatus'])) {
            if (!empty($map['OriginSiteStatus'])) {
                $model->originSiteStatus = [];
                $n                       = 0;
                foreach ($map['OriginSiteStatus'] as $item) {
                    $model->originSiteStatus[$n++] = null !== $item ? originSiteStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
