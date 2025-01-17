<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\censorResults;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\videoTimelines;

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
        if (null !== $this->censorResults) {
            $this->censorResults->validate();
        }
        if (null !== $this->videoTimelines) {
            $this->videoTimelines->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->censorResults) {
            $res['CensorResults'] = null !== $this->censorResults ? $this->censorResults->toArray($noStream) : $this->censorResults;
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->videoTimelines) {
            $res['VideoTimelines'] = null !== $this->videoTimelines ? $this->videoTimelines->toArray($noStream) : $this->videoTimelines;
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
