<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserResourcePackageResponseBody\resourcePackageInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnUserResourcePackageResponseBody extends Model
{
    /**
     * @example 96ED3127-EC7A-57C5-AFA6-A689B24B2530
     *
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
     * @return DescribeDcdnUserResourcePackageResponseBody
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
