<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

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
    public $lang;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'debug'      => 'Debug',
        'id'         => 'Id',
        'lang'       => 'Lang',
        'packageUrl' => 'PackageUrl',
        'platform'   => 'Platform',
        'sourceIp'   => 'SourceIp',
    ];

    public function validate()
    {
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
