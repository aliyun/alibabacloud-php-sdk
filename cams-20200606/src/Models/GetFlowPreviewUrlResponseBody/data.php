<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowPreviewUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Flow ID.
     *
     * @example 6dd31e1b7cc940fc99e293d9952b5b79
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The temporary preview URL.
     *
     * @example https://url
     *
     * @var string
     */
    public $previewUrl;

    /**
     * @description The time when the preview URL expires. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1700617436633
     *
     * @var int
     */
    public $previewUrlExpires;
    protected $_name = [
        'flowId'            => 'FlowId',
        'previewUrl'        => 'PreviewUrl',
        'previewUrlExpires' => 'PreviewUrlExpires',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }
        if (null !== $this->previewUrlExpires) {
            $res['PreviewUrlExpires'] = $this->previewUrlExpires;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }
        if (isset($map['PreviewUrlExpires'])) {
            $model->previewUrlExpires = $map['PreviewUrlExpires'];
        }

        return $model;
    }
}
