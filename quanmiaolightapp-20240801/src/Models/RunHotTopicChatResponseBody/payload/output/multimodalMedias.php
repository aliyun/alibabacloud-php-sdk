<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output;

use AlibabaCloud\Tea\Model;

class multimodalMedias extends Model
{
    /**
     * @example http://xxxx
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example image
     *
     * @var string
     */
    public $mediaType;

    /**
     * @var float
     */
    public $sortScore;
    protected $_name = [
        'fileUrl' => 'fileUrl',
        'mediaType' => 'mediaType',
        'sortScore' => 'sortScore',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['fileUrl'] = $this->fileUrl;
        }
        if (null !== $this->mediaType) {
            $res['mediaType'] = $this->mediaType;
        }
        if (null !== $this->sortScore) {
            $res['sortScore'] = $this->sortScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multimodalMedias
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
        }
        if (isset($map['mediaType'])) {
            $model->mediaType = $map['mediaType'];
        }
        if (isset($map['sortScore'])) {
            $model->sortScore = $map['sortScore'];
        }

        return $model;
    }
}
