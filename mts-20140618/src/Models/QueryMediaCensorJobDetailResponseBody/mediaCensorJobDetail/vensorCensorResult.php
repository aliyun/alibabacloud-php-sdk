<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\censorResults;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\videoTimelines;
use AlibabaCloud\Tea\Model;

class vensorCensorResult extends Model
{
    /**
     * @var videoTimelines
     */
    public $videoTimelines;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var censorResults
     */
    public $censorResults;
    protected $_name = [
        'videoTimelines' => 'VideoTimelines',
        'nextPageToken'  => 'NextPageToken',
        'censorResults'  => 'CensorResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoTimelines) {
            $res['VideoTimelines'] = null !== $this->videoTimelines ? $this->videoTimelines->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->censorResults) {
            $res['CensorResults'] = null !== $this->censorResults ? $this->censorResults->toMap() : null;
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
        if (isset($map['VideoTimelines'])) {
            $model->videoTimelines = videoTimelines::fromMap($map['VideoTimelines']);
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['CensorResults'])) {
            $model->censorResults = censorResults::fromMap($map['CensorResults']);
        }

        return $model;
    }
}
