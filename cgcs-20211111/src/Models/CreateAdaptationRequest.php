<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationRequest\adaptTarget;
use AlibabaCloud\Tea\Model;

class CreateAdaptationRequest extends Model
{
    /**
     * @var adaptTarget
     */
    public $adaptTarget;

    /**
     * @var string
     */
    public $appVersionId;
    protected $_name = [
        'adaptTarget'  => 'AdaptTarget',
        'appVersionId' => 'AppVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptTarget) {
            $res['AdaptTarget'] = null !== $this->adaptTarget ? $this->adaptTarget->toMap() : null;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAdaptationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptTarget'])) {
            $model->adaptTarget = adaptTarget::fromMap($map['AdaptTarget']);
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }

        return $model;
    }
}
