<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline;

use AlibabaCloud\Tea\Model;

class packageConfig extends Model
{
    /**
     * @var string
     */
    public $packageName;

    /**
     * @example war/jar/zip
     *
     * @var string
     */
    public $packageType;

    /**
     * @example http://myoss.oss-cn-****.aliyuncs.com/my-buc/2019-06-30/****.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $packageVersion;
    protected $_name = [
        'packageName'    => 'PackageName',
        'packageType'    => 'PackageType',
        'packageUrl'     => 'PackageUrl',
        'packageVersion' => 'PackageVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }

        return $model;
    }
}
