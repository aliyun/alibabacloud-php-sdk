<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppSecuritiesResponseBody\appSecuritys;
use AlibabaCloud\Tea\Model;

class DescribeAppSecuritiesResponseBody extends Model
{
    /**
     * @var appSecuritys
     */
    public $appSecuritys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appSecuritys' => 'AppSecuritys',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSecuritys) {
            $res['AppSecuritys'] = null !== $this->appSecuritys ? $this->appSecuritys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppSecuritiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppSecuritys'])) {
            $model->appSecuritys = appSecuritys::fromMap($map['AppSecuritys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
