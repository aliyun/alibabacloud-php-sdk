<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateAdaptationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adaptTargetShrink;

    /**
     * @description This parameter is required.
     *
     * @example 1432****
     *
     * @var string
     */
    public $appVersionId;
    protected $_name = [
        'adaptTargetShrink' => 'AdaptTarget',
        'appVersionId'      => 'AppVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptTargetShrink) {
            $res['AdaptTarget'] = $this->adaptTargetShrink;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAdaptationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptTarget'])) {
            $model->adaptTargetShrink = $map['AdaptTarget'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }

        return $model;
    }
}
