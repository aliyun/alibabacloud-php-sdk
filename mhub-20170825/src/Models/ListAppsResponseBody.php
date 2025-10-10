<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ListAppsResponseBody\appInfos;

class ListAppsResponseBody extends Model
{
    /**
     * @var appInfos
     */
    public $appInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $ubsmsStatus;
    protected $_name = [
        'appInfos' => 'AppInfos',
        'requestId' => 'RequestId',
        'total' => 'Total',
        'ubsmsStatus' => 'UbsmsStatus',
    ];

    public function validate()
    {
        if (null !== $this->appInfos) {
            $this->appInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInfos) {
            $res['AppInfos'] = null !== $this->appInfos ? $this->appInfos->toArray($noStream) : $this->appInfos;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
