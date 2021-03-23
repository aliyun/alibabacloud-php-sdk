<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindAppVersionsResponseBody\appVersionList;
use AlibabaCloud\Tea\Model;

class FindAppVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appVersionList
     */
    public $appVersionList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'appVersionList' => 'AppVersionList',
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
        if (null !== $this->appVersionList) {
            $res['AppVersionList'] = null !== $this->appVersionList ? $this->appVersionList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindAppVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppVersionList'])) {
            $model->appVersionList = appVersionList::fromMap($map['AppVersionList']);
        }

        return $model;
    }
}
