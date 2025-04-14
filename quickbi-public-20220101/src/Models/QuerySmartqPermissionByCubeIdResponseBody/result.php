<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QuerySmartqPermissionByCubeIdResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $cubeName;

    /**
     * @var bool
     */
    public $hasPerssion;
    protected $_name = [
        'cubeId' => 'CubeId',
        'cubeName' => 'CubeName',
        'hasPerssion' => 'HasPerssion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        if (null !== $this->cubeName) {
            $res['CubeName'] = $this->cubeName;
        }

        if (null !== $this->hasPerssion) {
            $res['HasPerssion'] = $this->hasPerssion;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['CubeName'])) {
            $model->cubeName = $map['CubeName'];
        }

        if (isset($map['HasPerssion'])) {
            $model->hasPerssion = $map['HasPerssion'];
        }

        return $model;
    }
}
