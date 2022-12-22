<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListDesignResponseBody\data;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @example https://preview-lyj.aliyuncs.com/preview/36dec4b3530848dc90e128870790fdc4?subSceneIds=219024
     *
     * @var string
     */
    public $previewUrl;

    /**
     * @example 1320814
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'previewUrl' => 'PreviewUrl',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
