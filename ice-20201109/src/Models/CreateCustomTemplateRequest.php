<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomTemplateRequest extends Model
{
    /**
     * @description The template name.
     *
     * This parameter is required.
     * @example test-template
     *
     * @var string
     */
    public $name;

    /**
     * @description The template subtype.
     *
     * Valid values for transcoding templates:
     *
     *   1 (Normal): regular template.
     *   2 (AudioTranscode): audio transcoding template.
     *   3 (Remux): container format conversion template.
     *   4 (NarrowBandV1): Narrowband HD 1.0 template.
     *   5 (NarrowBandV2): Narrowband HD 2.0 template.
     *
     * Valid values for snapshot templates:
     *
     *   1 (Normal): regular template.
     *   2 (Sprite): sprite template.
     *   3 (WebVtt): WebVTT template.
     *
     * Valid values for AI-assisted content moderation templates:
     *
     *   1 (Video): video moderation template.
     *   2 (Audio): audio moderation template.
     *   3 (Image): image moderation template.
     *
     * Valid values for AI-assisted intelligent erasure templates.
     *
     *   1 (VideoDelogo): logo erasure template.
     *   2 (VideoDetext): subtitle erasure template.
     *
     * @example 1
     *
     * @var int
     */
    public $subtype;

    /**
     * @description The template configurations. For more information, see [Template parameters](https://help.aliyun.com/document_detail/448291.html).
     *
     * This parameter is required.
     * @example {"Container":{"Format":"flv"},"Video":{},"Audio":{}}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The template type. Valid values:
     *
     *   1: transcoding template.
     *   2: snapshot template.
     *   3: animated image template.
     *   4\\. image watermark template.
     *   5: text watermark template.
     *   6: subtitle template.
     *   7: AI-assisted content moderation template.
     *   8: AI-assisted intelligent thumbnail template.
     *   9: AI-assisted intelligent erasure template.
     *   10: AI-assisted media fingerprint analysis template.
     *   11: AI-assisted smart tagging template.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'name'           => 'Name',
        'subtype'        => 'Subtype',
        'templateConfig' => 'TemplateConfig',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subtype) {
            $res['Subtype'] = $this->subtype;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Subtype'])) {
            $model->subtype = $map['Subtype'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
