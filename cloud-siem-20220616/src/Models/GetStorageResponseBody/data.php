<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetStorageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the storage region can be changed for once. Default value: false Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $canOperate;

    /**
     * @description Indicates whether the storage region can be changed. Default value: false Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $displayRegion;

    /**
     * @description The region where the data is stored.
     *
     * If the data management center is **cn-hangzhou**, the default value of **Region** is cn-shanghai, which specifies the China (Shanghai) region. If the data management center is **ap-southeast-1**, the default value of **Region** is ap-southeast-1, which specifies the Singapore region.
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The storage period of logs. Unit: day. Default value: 180. Valid values: 30 to 3000.
     *
     * @example 180
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'canOperate'    => 'CanOperate',
        'displayRegion' => 'DisplayRegion',
        'region'        => 'Region',
        'ttl'           => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canOperate) {
            $res['CanOperate'] = $this->canOperate;
        }
        if (null !== $this->displayRegion) {
            $res['DisplayRegion'] = $this->displayRegion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanOperate'])) {
            $model->canOperate = $map['CanOperate'];
        }
        if (isset($map['DisplayRegion'])) {
            $model->displayRegion = $map['DisplayRegion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
