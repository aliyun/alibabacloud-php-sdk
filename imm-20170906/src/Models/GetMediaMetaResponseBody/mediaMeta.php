<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaFormat;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaStreams;
use AlibabaCloud\Tea\Model;

class mediaMeta extends Model
{
    /**
     * @var mediaFormat
     */
    public $mediaFormat;

    /**
     * @var mediaStreams
     */
    public $mediaStreams;
    protected $_name = [
        'mediaFormat'  => 'MediaFormat',
        'mediaStreams' => 'MediaStreams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaFormat) {
            $res['MediaFormat'] = null !== $this->mediaFormat ? $this->mediaFormat->toMap() : null;
        }
        if (null !== $this->mediaStreams) {
            $res['MediaStreams'] = null !== $this->mediaStreams ? $this->mediaStreams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaFormat'])) {
            $model->mediaFormat = mediaFormat::fromMap($map['MediaFormat']);
        }
        if (isset($map['MediaStreams'])) {
            $model->mediaStreams = mediaStreams::fromMap($map['MediaStreams']);
        }

        return $model;
    }
}
