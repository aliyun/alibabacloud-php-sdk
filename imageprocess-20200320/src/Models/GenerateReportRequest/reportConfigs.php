<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\GenerateReportRequest;

use AlibabaCloud\Dara\Model;

class reportConfigs extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $theme;
    protected $_name = [
        'action' => 'Action',
        'format' => 'Format',
        'templateVersion' => 'TemplateVersion',
        'theme' => 'Theme',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        if (null !== $this->theme) {
            $res['Theme'] = $this->theme;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        if (isset($map['Theme'])) {
            $model->theme = $map['Theme'];
        }

        return $model;
    }
}
