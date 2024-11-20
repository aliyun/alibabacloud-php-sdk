<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponseBody\packageJob;
use AlibabaCloud\Tea\Model;

class GetPackageJobResponseBody extends Model
{
    /**
     * @description The information about the packaging job.
     *
     * @var packageJob
     */
    public $packageJob;

    /**
     * @description The request ID.
     *
     * @example 31E30781-9495-5E2D-A84D-759B0A01E262
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'packageJob' => 'PackageJob',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageJob) {
            $res['PackageJob'] = null !== $this->packageJob ? $this->packageJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPackageJobResponseBody
     */
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
