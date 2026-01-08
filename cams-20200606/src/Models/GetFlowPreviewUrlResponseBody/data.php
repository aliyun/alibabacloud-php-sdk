<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowPreviewUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var int
     */
    public $previewUrlExpires;
    protected $_name = [
        'flowId' => 'FlowId',
        'previewUrl' => 'PreviewUrl',
        'previewUrlExpires' => 'PreviewUrlExpires',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
