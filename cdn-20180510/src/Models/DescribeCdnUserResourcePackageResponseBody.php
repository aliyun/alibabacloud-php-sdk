<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserResourcePackageResponseBody\resourcePackageInfos;
use AlibabaCloud\Tea\Model;

class DescribeCdnUserResourcePackageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcePackageInfos
     */
    public $resourcePackageInfos;
    protected $_name = [
        'requestId'            => 'RequestId',
        'resourcePackageInfos' => 'ResourcePackageInfos',
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
        if (null !== $this->resourcePackageInfos) {
            $res['ResourcePackageInfos'] = null !== $this->resourcePackageInfos ? $this->resourcePackageInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnUserResourcePackageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcePackageInfos'])) {
            $model->resourcePackageInfos = resourcePackageInfos::fromMap($map['ResourcePackageInfos']);
        }

        return $model;
    }
}
