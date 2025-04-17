<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult\videoDNA;

class DNAResult extends Model
{
    /**
     * @var videoDNA[]
     */
    public $videoDNA;
    protected $_name = [
        'videoDNA' => 'VideoDNA',
    ];

    public function validate()
    {
        if (\is_array($this->videoDNA)) {
            Model::validateArray($this->videoDNA);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoDNA) {
            if (\is_array($this->videoDNA)) {
                $res['VideoDNA'] = [];
                $n1 = 0;
                foreach ($this->videoDNA as $item1) {
                    $res['VideoDNA'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['VideoDNA'])) {
            if (!empty($map['VideoDNA'])) {
                $model->videoDNA = [];
                $n1 = 0;
                foreach ($map['VideoDNA'] as $item1) {
                    $model->videoDNA[$n1++] = videoDNA::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
