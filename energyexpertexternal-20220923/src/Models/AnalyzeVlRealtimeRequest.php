<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class AnalyzeVlRealtimeRequest extends Model
{
    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'fileUrl' => 'fileUrl',
        'language' => 'language',
        'templateId' => 'templateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['fileUrl'] = $this->fileUrl;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
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
        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
