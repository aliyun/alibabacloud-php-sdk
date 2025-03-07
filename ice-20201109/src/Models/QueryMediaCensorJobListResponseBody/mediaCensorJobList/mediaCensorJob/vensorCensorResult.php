<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\vensorCensorResult\censorResults;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\vensorCensorResult\videoTimelines;
use AlibabaCloud\Tea\Model;

class vensorCensorResult extends Model
{
    /**
     * @description A collection of moderation results. The information includes the summary about various scenarios such as pornographic content moderation and terrorist content moderation.
     *
     * @var censorResults
     */
    public $censorResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example ea04afcca7cd4e80b9ece8fbb251
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The moderation results that are sorted in ascending order by time.
     *
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
