<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\qrcodeResult\qrcodeImages;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\qrcodeResult\qrcodeVideos;
use AlibabaCloud\Tea\Model;

class qrcodeResult extends Model
{
    /**
     * @var qrcodeImages
     */
    public $qrcodeImages;

    /**
     * @var qrcodeVideos
     */
    public $qrcodeVideos;
    protected $_name = [
        'qrcodeImages' => 'QrcodeImages',
        'qrcodeVideos' => 'QrcodeVideos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qrcodeImages) {
            $res['QrcodeImages'] = null !== $this->qrcodeImages ? $this->qrcodeImages->toMap() : null;
        }
        if (null !== $this->qrcodeVideos) {
            $res['QrcodeVideos'] = null !== $this->qrcodeVideos ? $this->qrcodeVideos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qrcodeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QrcodeImages'])) {
            $model->qrcodeImages = qrcodeImages::fromMap($map['QrcodeImages']);
        }
        if (isset($map['QrcodeVideos'])) {
            $model->qrcodeVideos = qrcodeVideos::fromMap($map['QrcodeVideos']);
        }

        return $model;
    }
}
