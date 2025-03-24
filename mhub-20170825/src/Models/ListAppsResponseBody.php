<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\SDK\Mhub\V20170825\Models\ListAppsResponseBody\appInfos;
use AlibabaCloud\Tea\Model;

class ListAppsResponseBody extends Model
{
    /**
     * @var appInfos
     */
    public $appInfos;

    /**
     * @example 126D4DDD-05A5-49B1-B18C-39C4A929BFB2
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $total;

    /**
     * @example enabled
     *
     * @var string
     */
    public $ubsmsStatus;
    protected $_name = [
        'appInfos' => 'AppInfos',
        'requestId' => 'RequestId',
        'total' => 'Total',
        'ubsmsStatus' => 'UbsmsStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfos) {
            $res['AppInfos'] = null !== $this->appInfos ? $this->appInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->ubsmsStatus) {
            $res['UbsmsStatus'] = $this->ubsmsStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfos'])) {
            $model->appInfos = appInfos::fromMap($map['AppInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['UbsmsStatus'])) {
            $model->ubsmsStatus = $map['UbsmsStatus'];
        }

        return $model;
    }
}
