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
     * @var string
     */
    public $tag;

    /**
     * @var string[]
     */
    public $times;
    protected $_name = [
        'faceUrl' => 'FaceUrl',
        'tag'     => 'Tag',
        'times'   => 'Times',
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
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
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
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Times'])) {
            if (!empty($map['Times'])) {
                $model->times = $map['Times'];
            }
        }

        return $model;
    }
}
