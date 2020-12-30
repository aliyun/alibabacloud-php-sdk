<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\AddEndPointResponseBody\endPointInfo;
use AlibabaCloud\Tea\Model;

class AddEndPointResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var endPointInfo
     */
    public $endPointInfo;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'endPointInfo' => 'EndPointInfo',
        'regionId'     => 'RegionId',
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
        if (null !== $this->endPointInfo) {
            $res['EndPointInfo'] = null !== $this->endPointInfo ? $this->endPointInfo->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEndPointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EndPointInfo'])) {
            $model->endPointInfo = endPointInfo::fromMap($map['EndPointInfo']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
