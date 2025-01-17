<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponseBody\packageJob;

class GetPackageJobResponseBody extends Model
{
    /**
     * @var packageJob
     */
    public $packageJob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'packageJob' => 'PackageJob',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->packageJob) {
            $this->packageJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageJob) {
            $res['PackageJob'] = null !== $this->packageJob ? $this->packageJob->toArray($noStream) : $this->packageJob;
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
        if (isset($map['PackageJob'])) {
            $model->packageJob = packageJob::fromMap($map['PackageJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
