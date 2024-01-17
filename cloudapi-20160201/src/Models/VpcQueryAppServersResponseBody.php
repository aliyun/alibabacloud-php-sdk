<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcQueryAppServersResponseBody\appServerInfos;
use AlibabaCloud\Tea\Model;

class VpcQueryAppServersResponseBody extends Model
{
    /**
     * @var appServerInfos
     */
    public $appServerInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appServerInfos' => 'AppServerInfos',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appServerInfos) {
            $res['AppServerInfos'] = null !== $this->appServerInfos ? $this->appServerInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VpcQueryAppServersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppServerInfos'])) {
            $model->appServerInfos = appServerInfos::fromMap($map['AppServerInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
