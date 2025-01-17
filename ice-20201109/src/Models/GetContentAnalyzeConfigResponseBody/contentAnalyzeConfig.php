<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetContentAnalyzeConfigResponseBody;

use AlibabaCloud\Dara\Model;

class contentAnalyzeConfig extends Model
{
    /**
     * @var bool
     */
    public $auto;
    /**
     * @var string
     */
    public $saveType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
