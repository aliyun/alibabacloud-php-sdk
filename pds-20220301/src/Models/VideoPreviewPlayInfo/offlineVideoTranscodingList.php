<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayInfo;

use AlibabaCloud\Tea\Model;

class offlineVideoTranscodingList extends Model
{
    /**
     * @var bool
     */
    public $keepOriginalResolution;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'keepOriginalResolution' => 'keep_original_resolution',
        'status'                 => 'status',
        'templateId'             => 'template_id',
        'url'                    => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keepOriginalResolution) {
            $res['keep_original_resolution'] = $this->keepOriginalResolution;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offlineVideoTranscodingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keep_original_resolution'])) {
            $model->keepOriginalResolution = $map['keep_original_resolution'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['template_id'])) {
            $model->templateId = $map['template_id'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
