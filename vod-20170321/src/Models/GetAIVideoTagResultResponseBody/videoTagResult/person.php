<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult;

use AlibabaCloud\Tea\Model;

class person extends Model
{
    /**
     * @description The URL of the profile photo.
     *
     * > This parameter is returned only when a figure tag was used.
     * @example http://example.com/aivideotag/8829B4DB-AFD9-4F*****F6-12965DBFFA14/Index_****.jpg
     *
     * @var string
     */
    public $faceUrl;

    /**
     * @description The tag string.
     *
     * @example John
     *
     * @var string
     */
    public $tag;

    /**
     * @description The points in time when the tags are displayed. Unit: milliseconds.
     *
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
