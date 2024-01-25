<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\RequestUserSellPointTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $displayConfig;

    /**
     * @var mixed[]
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $templateUuid;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'displayConfig'  => 'DisplayConfig',
        'templateConfig' => 'TemplateConfig',
        'templateUuid'   => 'TemplateUuid',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = $this->displayConfig;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateUuid) {
            $res['TemplateUuid'] = $this->templateUuid;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['DisplayConfig'])) {
            $model->displayConfig = $map['DisplayConfig'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateUuid'])) {
            $model->templateUuid = $map['TemplateUuid'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
