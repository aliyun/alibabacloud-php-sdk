<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceVersionDetailRequest extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'model'       => 'Model',
        'networkType' => 'NetworkType',
        'region'      => 'Region',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceVersionDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
