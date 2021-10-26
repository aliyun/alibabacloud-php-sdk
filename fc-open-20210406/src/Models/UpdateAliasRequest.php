<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateAliasRequest extends Model
{
    /**
     * @description 额外版本权重
     *
     * @var float[]
     */
    public $additionalVersionWeight;

    /**
     * @description 别名描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 版本ID
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'additionalVersionWeight' => 'additionalVersionWeight',
        'description'             => 'description',
        'versionId'               => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalVersionWeight) {
            $res['additionalVersionWeight'] = $this->additionalVersionWeight;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalVersionWeight'])) {
            $model->additionalVersionWeight = $map['additionalVersionWeight'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
