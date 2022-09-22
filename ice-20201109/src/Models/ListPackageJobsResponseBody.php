<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList;
use AlibabaCloud\Tea\Model;

class ListPackageJobsResponseBody extends Model
{
    /**
     * @var packageJobList
     */
    public $packageJobList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'packageJobList' => 'PackageJobList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageJobList) {
            $res['PackageJobList'] = null !== $this->packageJobList ? $this->packageJobList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPackageJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageJobList'])) {
            $model->packageJobList = packageJobList::fromMap($map['PackageJobList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
