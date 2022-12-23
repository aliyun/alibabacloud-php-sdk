<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult\videoDNA\detail;
use AlibabaCloud\Tea\Model;

class videoDNA extends Model
{
    /**
     * @description The details of the matched video. Information such as the location and duration of the video is returned.
     *
     * @var detail[]
     */
    public $detail;

    /**
     * @description The ID of the video that has a similar fingerprint.
     *
     * @example 6ad8987da46f4b*****490ce2873745
     *
     * @var string
     */
    public $primaryKey;

    /**
     * @description The similarity between the fingerprints of the input video and the matched video. 1 indicates that the fingerprints of the two videos are the same.
     *
     * @example 0.98
     *
     * @var string
     */
    public $similarity;
    protected $_name = [
        'detail'     => 'Detail',
        'primaryKey' => 'PrimaryKey',
        'similarity' => 'Similarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoDNA
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        return $model;
    }
}
