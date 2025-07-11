<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeRenderingInstanceSettingsRequest extends Model
{
    /**
     * @var string[]
     */
    public $attributeNames;

    /**
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'attributeNames' => 'AttributeNames',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeNames) {
            $res['AttributeNames'] = $this->attributeNames;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRenderingInstanceSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeNames'])) {
            if (!empty($map['AttributeNames'])) {
                $model->attributeNames = $map['AttributeNames'];
            }
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
