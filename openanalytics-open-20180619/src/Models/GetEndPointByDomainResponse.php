<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetEndPointByDomainResponse\endPointInfo;
use AlibabaCloud\Tea\Model;

class GetEndPointByDomainResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var endPointInfo
     */
    public $endPointInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'regionId'     => 'RegionId',
        'endPointInfo' => 'EndPointInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('endPointInfo', $this->endPointInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->endPointInfo) {
            $res['EndPointInfo'] = null !== $this->endPointInfo ? $this->endPointInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEndPointByDomainResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EndPointInfo'])) {
            $model->endPointInfo = endPointInfo::fromMap($map['EndPointInfo']);
        }

        return $model;
    }
}
