<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateBizTypeImageLibRequest extends Model
{
    /**
     * @var string
     */
    public $bizTypeName;

    /**
     * @var string
     */
    public $black;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $review;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $white;
    protected $_name = [
        'bizTypeName'  => 'BizTypeName',
        'black'        => 'Black',
        'resourceType' => 'ResourceType',
        'review'       => 'Review',
        'scene'        => 'Scene',
        'white'        => 'White',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypeName) {
            $res['BizTypeName'] = $this->bizTypeName;
        }
        if (null !== $this->black) {
            $res['Black'] = $this->black;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->review) {
            $res['Review'] = $this->review;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->white) {
            $res['White'] = $this->white;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBizTypeImageLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypeName'])) {
            $model->bizTypeName = $map['BizTypeName'];
        }
        if (isset($map['Black'])) {
            $model->black = $map['Black'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Review'])) {
            $model->review = $map['Review'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['White'])) {
            $model->white = $map['White'];
        }

        return $model;
    }
}
