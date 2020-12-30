<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult;

use AlibabaCloud\Tea\Model;

class person extends Model
{
    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string[]
     */
    public $times;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'faceUrl' => 'FaceUrl',
        'times'   => 'Times',
        'tag'     => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return person
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['Times'])) {
            if (!empty($map['Times'])) {
                $model->times = $map['Times'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
