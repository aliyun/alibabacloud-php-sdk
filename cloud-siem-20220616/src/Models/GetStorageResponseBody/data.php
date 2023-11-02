<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetStorageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $canOperate;

    /**
     * @example false
     *
     * @var bool
     */
    public $displayRegion;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
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
