<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ListFeatureViewOnlineFeaturesShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $joinIdsShrink;
    protected $_name = [
        'joinIdsShrink' => 'JoinIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinIdsShrink) {
            $res['JoinIds'] = $this->joinIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureViewOnlineFeaturesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinIds'])) {
            $model->joinIdsShrink = $map['JoinIds'];
        }

        return $model;
    }
}
