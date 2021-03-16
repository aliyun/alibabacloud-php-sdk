<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryInnerJobResponseBody\image;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryInnerJobResponseBody\video;
use AlibabaCloud\Tea\Model;

class QueryInnerJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var video
     */
    public $video;

    /**
     * @var image
     */
    public $image;
    protected $_name = [
        'status'     => 'Status',
        'suggestion' => 'Suggestion',
        'requestId'  => 'RequestId',
        'video'      => 'Video',
        'image'      => 'Image',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInnerJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }

        return $model;
    }
}
