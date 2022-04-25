<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetScenePreviewResourceRequest extends Model
{
    /**
     * @description 预览token
     *
     * @var string
     */
    public $previewToken;
    protected $_name = [
        'previewToken' => 'PreviewToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->previewToken) {
            $res['PreviewToken'] = $this->previewToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScenePreviewResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreviewToken'])) {
            $model->previewToken = $map['PreviewToken'];
        }

        return $model;
    }
}
