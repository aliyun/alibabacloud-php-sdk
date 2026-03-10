<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetAppRecommendedCommoditiesRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $resourceConditions;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'bizId' => 'BizId',
        'resourceConditions' => 'ResourceConditions',
        'scene' => 'Scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->resourceConditions) {
            $res['ResourceConditions'] = $this->resourceConditions;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ResourceConditions'])) {
            $model->resourceConditions = $map['ResourceConditions'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
