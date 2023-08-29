<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppResponseBody\queryMappCenterAppResult\mappCenterApp;

use AlibabaCloud\Tea\Model;

class iosConfig extends Model
{
    /**
     * @var string
     */
    public $bundleId;
    protected $_name = [
        'bundleId' => 'BundleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return iosConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }

        return $model;
    }
}
