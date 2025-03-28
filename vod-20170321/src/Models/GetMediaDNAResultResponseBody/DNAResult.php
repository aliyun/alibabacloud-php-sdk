<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult\videoDNA;
use AlibabaCloud\Tea\Model;

class DNAResult extends Model
{
    /**
     * @description The video fingerprint recognition result.
     *
     * @var videoDNA[]
     */
    public $videoDNA;
    protected $_name = [
        'videoDNA' => 'VideoDNA',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoDNA) {
            $res['VideoDNA'] = [];
            if (null !== $this->videoDNA && \is_array($this->videoDNA)) {
                $n = 0;
                foreach ($this->videoDNA as $item) {
                    $res['VideoDNA'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DNAResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoDNA'])) {
            if (!empty($map['VideoDNA'])) {
                $model->videoDNA = [];
                $n = 0;
                foreach ($map['VideoDNA'] as $item) {
                    $model->videoDNA[$n++] = null !== $item ? videoDNA::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
