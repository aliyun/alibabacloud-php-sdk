<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class ListRegionsRequest extends Model
{
    /**
     * @var string
     */
    public $ak;

    /**
     * @var string
     */
    public $cloudType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sk;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'ak'        => 'ak',
        'cloudType' => 'cloudType',
        'region'    => 'region',
        'regionId'  => 'regionId',
        'sk'        => 'sk',
        'tenantId'  => 'tenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ak) {
            $res['ak'] = $this->ak;
        }
        if (null !== $this->cloudType) {
            $res['cloudType'] = $this->cloudType;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->sk) {
            $res['sk'] = $this->sk;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ak'])) {
            $model->ak = $map['ak'];
        }
        if (isset($map['cloudType'])) {
            $model->cloudType = $map['cloudType'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['sk'])) {
            $model->sk = $map['sk'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
