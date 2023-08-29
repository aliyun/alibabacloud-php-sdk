<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterAppsResponseBody\listMappCenterAppResult\mappCenterAppList;

use AlibabaCloud\Tea\Model;

class androidConfig extends Model
{
    /**
     * @var string
     */
    public $certRSA;

    /**
     * @var string
     */
    public $packageName;
    protected $_name = [
        'certRSA'     => 'CertRSA',
        'packageName' => 'PackageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certRSA) {
            $res['CertRSA'] = $this->certRSA;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return androidConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertRSA'])) {
            $model->certRSA = $map['CertRSA'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        return $model;
    }
}
