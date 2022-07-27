<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetSecretParameterRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parameterVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $withDecryption;
    protected $_name = [
        'name'             => 'Name',
        'parameterVersion' => 'ParameterVersion',
        'regionId'         => 'RegionId',
        'withDecryption'   => 'WithDecryption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameterVersion) {
            $res['ParameterVersion'] = $this->parameterVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->withDecryption) {
            $res['WithDecryption'] = $this->withDecryption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecretParameterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParameterVersion'])) {
            $model->parameterVersion = $map['ParameterVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WithDecryption'])) {
            $model->withDecryption = $map['WithDecryption'];
        }

        return $model;
    }
}
