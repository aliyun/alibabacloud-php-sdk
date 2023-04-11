<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://example.com/example.jpg
     *
     * @var string
     */
    public $finalImageUrl;

    /**
     * @example https://example.com/example.jpg
     *
     * @var string
     */
    public $inPaintingUrl;

    /**
     * @example Editor Template Json String
     *
     * @var string
     */
    public $templateJson;
    protected $_name = [
        'finalImageUrl' => 'FinalImageUrl',
        'inPaintingUrl' => 'InPaintingUrl',
        'templateJson'  => 'TemplateJson',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
