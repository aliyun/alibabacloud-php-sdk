<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppPackageRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var bool
     */
    public $debug;
    protected $_name = [
        'id'         => 'Id',
        'packageUrl' => 'PackageUrl',
        'platform'   => 'Platform',
        'debug'      => 'Debug',
    ];

    public function validate()
    {
        Model::validateRequired('packageUrl', $this->packageUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->debug) {
            $res['Debug'] = $this->debug;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }

        return $model;
    }
}
