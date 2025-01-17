<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\vensorCensorResult\videoTimelines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\vensorCensorResult\videoTimelines\videoTimeline\censorResults;

class videoTimeline extends Model
{
    /**
     * @var censorResults
     */
    public $censorResults;
    /**
     * @var string
     */
    public $object;
    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'censorResults' => 'CensorResults',
        'object'        => 'Object',
        'timestamp'     => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->censorResults) {
            $this->censorResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->censorResults) {
            $res['CensorResults'] = null !== $this->censorResults ? $this->censorResults->toArray($noStream) : $this->censorResults;
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
