<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PreviewDatasetVersionResponseBody;

use AlibabaCloud\Dara\Model;

class previewResult extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var bool
     */
    public $supportPreview;
    protected $_name = [
        'content' => 'Content',
        'fileName' => 'FileName',
        'mimeType' => 'MimeType',
        'supportPreview' => 'SupportPreview',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->mimeType) {
            $res['MimeType'] = $this->mimeType;
        }

        if (null !== $this->supportPreview) {
            $res['SupportPreview'] = $this->supportPreview;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['MimeType'])) {
            $model->mimeType = $map['MimeType'];
        }

        if (isset($map['SupportPreview'])) {
            $model->supportPreview = $map['SupportPreview'];
        }

        return $model;
    }
}
