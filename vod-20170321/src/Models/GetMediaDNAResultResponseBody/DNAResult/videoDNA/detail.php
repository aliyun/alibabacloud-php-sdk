<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult\videoDNA;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult\videoDNA\detail\duplication;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult\videoDNA\detail\input;
use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The start time and duration of the matched video.
     *
     * @var duplication
     */
    public $duplication;

    /**
     * @description The start time and duration of the input video.
     *
     * @var input
     */
    public $input;
    protected $_name = [
        'duplication' => 'Duplication',
        'input'       => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duplication) {
            $res['Duplication'] = null !== $this->duplication ? $this->duplication->toMap() : null;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duplication'])) {
            $model->duplication = duplication::fromMap($map['Duplication']);
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
