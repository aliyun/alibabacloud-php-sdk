<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSubtitleJobResponseBody\subtitleJob;
use AlibabaCloud\Tea\Model;

class SubmitSubtitleJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subtitleJob
     */
    public $subtitleJob;
    protected $_name = [
        'requestId'   => 'RequestId',
        'subtitleJob' => 'SubtitleJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subtitleJob) {
            $res['SubtitleJob'] = null !== $this->subtitleJob ? $this->subtitleJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSubtitleJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubtitleJob'])) {
            $model->subtitleJob = subtitleJob::fromMap($map['SubtitleJob']);
        }

        return $model;
    }
}
