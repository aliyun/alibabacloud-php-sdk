<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models;

use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackResponse\packInfo;
use AlibabaCloud\Tea\Model;

class DescribePackResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var packInfo
     */
    public $packInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'packInfo'  => 'PackInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('packInfo', $this->packInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->packInfo) {
            $res['PackInfo'] = null !== $this->packInfo ? $this->packInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePackResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PackInfo'])) {
            $model->packInfo = packInfo::fromMap($map['PackInfo']);
        }

        return $model;
    }
}
