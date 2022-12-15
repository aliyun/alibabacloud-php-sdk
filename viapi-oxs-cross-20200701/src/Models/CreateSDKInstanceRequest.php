<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CreateSDKInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $recipe;

    /**
     * @var int
     */
    public $validFrom;

    /**
     * @var int
     */
    public $validTo;
    protected $_name = [
        'bundleId'  => 'BundleId',
        'pk'        => 'Pk',
        'platform'  => 'Platform',
        'recipe'    => 'Recipe',
        'validFrom' => 'ValidFrom',
        'validTo'   => 'ValidTo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->recipe) {
            $res['Recipe'] = $this->recipe;
        }
        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }
        if (null !== $this->validTo) {
            $res['ValidTo'] = $this->validTo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSDKInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Recipe'])) {
            $model->recipe = $map['Recipe'];
        }
        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }
        if (isset($map['ValidTo'])) {
            $model->validTo = $map['ValidTo'];
        }

        return $model;
    }
}
