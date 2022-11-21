<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $media;

    /**
     * @var string
     */
    public $outputUrl;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'media'     => 'Media',
        'outputUrl' => 'OutputUrl',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = $this->media;
        }
        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Media'])) {
            $model->media = $map['Media'];
        }
        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
