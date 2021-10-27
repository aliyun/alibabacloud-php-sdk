<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppPackageRequest extends Model
{
    /**
     * @var bool
     */
    public $debug;

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
    protected $_name = [
        'debug'      => 'Debug',
        'id'         => 'Id',
        'packageUrl' => 'PackageUrl',
        'platform'   => 'Platform',
    ];

    public function validate()
    {
        Model::validateRequired('packageUrl', $this->packageUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debug) {
            $res['Debug'] = $this->debug;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
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
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
