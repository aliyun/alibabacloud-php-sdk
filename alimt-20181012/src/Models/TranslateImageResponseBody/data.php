<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $finalImageUrl;

    /**
     * @var string
     */
    public $inPaintingUrl;

    /**
     * @var string
     */
    public $templateJson;
    protected $_name = [
        'finalImageUrl' => 'FinalImageUrl',
        'inPaintingUrl' => 'InPaintingUrl',
        'templateJson' => 'TemplateJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finalImageUrl) {
            $res['FinalImageUrl'] = $this->finalImageUrl;
        }

        if (null !== $this->inPaintingUrl) {
            $res['InPaintingUrl'] = $this->inPaintingUrl;
        }

        if (null !== $this->templateJson) {
            $res['TemplateJson'] = $this->templateJson;
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
        if (isset($map['FinalImageUrl'])) {
            $model->finalImageUrl = $map['FinalImageUrl'];
        }

        if (isset($map['InPaintingUrl'])) {
            $model->inPaintingUrl = $map['InPaintingUrl'];
        }

        if (isset($map['TemplateJson'])) {
            $model->templateJson = $map['TemplateJson'];
        }

        return $model;
    }
}
