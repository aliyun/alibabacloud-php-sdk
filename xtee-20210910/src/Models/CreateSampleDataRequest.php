<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateSampleDataRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $riskValue;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $storePath;

    /**
     * @var string
     */
    public $storeType;
    protected $_name = [
        'lang'        => 'Lang',
        'description' => 'description',
        'encryptType' => 'encryptType',
        'name'        => 'name',
        'regId'       => 'regId',
        'riskValue'   => 'riskValue',
        'scene'       => 'scene',
        'storePath'   => 'storePath',
        'storeType'   => 'storeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->encryptType) {
            $res['encryptType'] = $this->encryptType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->riskValue) {
            $res['riskValue'] = $this->riskValue;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->storePath) {
            $res['storePath'] = $this->storePath;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSampleDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['encryptType'])) {
            $model->encryptType = $map['encryptType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['riskValue'])) {
            $model->riskValue = $map['riskValue'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['storePath'])) {
            $model->storePath = $map['storePath'];
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        return $model;
    }
}
