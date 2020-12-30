<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult\videoDNA\detail;

use AlibabaCloud\Tea\Model;

class duplication extends Model
{
    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $duration;
    protected $_name = [
        'start'    => 'Start',
        'duration' => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return duplication
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
