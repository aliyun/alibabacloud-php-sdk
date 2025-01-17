<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList;

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
        if (null !== $this->packageJobList) {
            $this->packageJobList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageJobList) {
            $res['PackageJobList'] = null !== $this->packageJobList ? $this->packageJobList->toArray($noStream) : $this->packageJobList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PackageJobList'])) {
            $model->packageJobList = packageJobList::fromMap($map['PackageJobList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
