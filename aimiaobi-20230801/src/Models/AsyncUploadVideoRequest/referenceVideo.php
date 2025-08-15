<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest;

use AlibabaCloud\Dara\Model;

class referenceVideo extends Model
{
    /**
     * @var string
     */
    public $videoExtraInfo;

    /**
     * @var string
     */
    public $videoName;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoExtraInfo' => 'VideoExtraInfo',
        'videoName' => 'VideoName',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoExtraInfo) {
            $res['VideoExtraInfo'] = $this->videoExtraInfo;
        }

        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
        }

        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['VideoExtraInfo'])) {
            $model->videoExtraInfo = $map['VideoExtraInfo'];
        }

        if (isset($map['VideoName'])) {
            $model->videoName = $map['VideoName'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
