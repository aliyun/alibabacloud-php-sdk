<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class ListSurveyResourceTypesRequest extends Model
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
    protected $_name = [
        'ak'        => 'ak',
        'cloudType' => 'cloudType',
        'region'    => 'region',
        'regionId'  => 'regionId',
        'sk'        => 'sk',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSurveyResourceTypesRequest
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

        return $model;
    }
}
