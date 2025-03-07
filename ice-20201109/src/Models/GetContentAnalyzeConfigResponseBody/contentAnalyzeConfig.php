<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetContentAnalyzeConfigResponseBody;

use AlibabaCloud\Tea\Model;

class contentAnalyzeConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $auto;

    /**
     * @example TEXT,FACE
     *
     * @var string
     */
    public $saveType;

    /**
     * @example S00000101-100070
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'auto'       => 'Auto',
        'saveType'   => 'SaveType',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auto) {
            $res['Auto'] = $this->auto;
        }
        if (null !== $this->saveType) {
            $res['SaveType'] = $this->saveType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentAnalyzeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auto'])) {
            $model->auto = $map['Auto'];
        }
        if (isset($map['SaveType'])) {
            $model->saveType = $map['SaveType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
