<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\videoTimelines;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\videoTimelines\videoTimeline\censorResults;
use AlibabaCloud\Tea\Model;

class videoTimeline extends Model
{
    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $object;

    /**
     * @var censorResults
     */
    public $censorResults;
    protected $_name = [
        'timestamp'     => 'Timestamp',
        'object'        => 'Object',
        'censorResults' => 'CensorResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->censorResults) {
            $res['CensorResults'] = null !== $this->censorResults ? $this->censorResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoTimeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['CensorResults'])) {
            $model->censorResults = censorResults::fromMap($map['CensorResults']);
        }

        return $model;
    }
}
