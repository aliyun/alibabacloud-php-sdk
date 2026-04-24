<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeVoiceNarratorJobResponseBody;

use AlibabaCloud\Dara\Model;

class jobResult extends Model
{
    /**
     * @var string
     */
    public $editingProjectId;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $outputLanguage;

    /**
     * @var string
     */
    public $outputUrl;
    protected $_name = [
        'editingProjectId' => 'EditingProjectId',
        'mediaId' => 'MediaId',
        'outputLanguage' => 'OutputLanguage',
        'outputUrl' => 'OutputUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editingProjectId) {
            $res['EditingProjectId'] = $this->editingProjectId;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->outputLanguage) {
            $res['OutputLanguage'] = $this->outputLanguage;
        }

        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
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
        if (isset($map['EditingProjectId'])) {
            $model->editingProjectId = $map['EditingProjectId'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['OutputLanguage'])) {
            $model->outputLanguage = $map['OutputLanguage'];
        }

        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }

        return $model;
    }
}
