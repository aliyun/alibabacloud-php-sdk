<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody\cens;

use AlibabaCloud\Tea\Model;

class packageIds extends Model
{
    /**
     * @description The ID of the bandwidth plan that is bound to the CEN instance.
     *
     * @example cenbwp-4c2zaavbvh5f42****
     *
     * @var string
     */
    public $packageId;
    protected $_name = [
        'packageId' => 'PackageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        return $model;
    }
}
