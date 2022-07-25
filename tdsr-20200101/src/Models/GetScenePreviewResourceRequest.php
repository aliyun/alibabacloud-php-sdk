<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetScenePreviewResourceRequest extends Model
{
    /**
     * @var bool
     */
    public $draft;

    /**
     * @var string
     */
    public $previewToken;
    protected $_name = [
        'draft'        => 'Draft',
        'previewToken' => 'PreviewToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->draft) {
            $res['Draft'] = $this->draft;
        }
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
        if (isset($map['Draft'])) {
            $model->draft = $map['Draft'];
        }
        if (isset($map['PreviewToken'])) {
            $model->previewToken = $map['PreviewToken'];
        }

        return $model;
    }
}
