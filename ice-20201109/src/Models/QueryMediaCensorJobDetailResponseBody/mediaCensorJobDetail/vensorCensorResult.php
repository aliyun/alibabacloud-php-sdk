<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\censorResults;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\videoTimelines;
use AlibabaCloud\Tea\Model;

class vensorCensorResult extends Model
{
    /**
     * @var censorResults
     */
    public $censorResults;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var videoTimelines
     */
    public $videoTimelines;
    protected $_name = [
        'censorResults'  => 'CensorResults',
        'nextPageToken'  => 'NextPageToken',
        'videoTimelines' => 'VideoTimelines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->censorResults) {
            $res['CensorResults'] = null !== $this->censorResults ? $this->censorResults->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->videoTimelines) {
            $res['VideoTimelines'] = null !== $this->videoTimelines ? $this->videoTimelines->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vensorCensorResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CensorResults'])) {
            $model->censorResults = censorResults::fromMap($map['CensorResults']);
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['VideoTimelines'])) {
            $model->videoTimelines = videoTimelines::fromMap($map['VideoTimelines']);
        }

        return $model;
    }
}
