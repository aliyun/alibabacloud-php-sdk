<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeStreamNumResponseBody\transcodeStreamCountDetails;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamTranscodeStreamNumResponseBody extends Model
{
    /**
     * @description The number of streams for which transcoding is triggered by stream pulling.
     *
     * @example 10
     *
     * @var int
     */
    public $lazyTranscodedNumber;

    /**
     * @description The request ID.
     *
     * @example 150191A4-DD88-5941-B48C-9DF59E0A8B1F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of streams.
     *
     * @example 57
     *
     * @var int
     */
    public $total;

    /**
     * @description The details about the transcoding templates.
     *
     * @var transcodeStreamCountDetails[]
     */
    public $transcodeStreamCountDetails;

    /**
     * @description The number of streams that are transcoded.
     *
     * @example 30
     *
     * @var int
     */
    public $transcodedNumber;

    /**
     * @description The number of streams that are not transcoded.
     *
     * @example 27
     *
     * @var int
     */
    public $untranscodeNumber;
    protected $_name = [
        'lazyTranscodedNumber' => 'LazyTranscodedNumber',
        'requestId' => 'RequestId',
        'total' => 'Total',
        'transcodeStreamCountDetails' => 'TranscodeStreamCountDetails',
        'transcodedNumber' => 'TranscodedNumber',
        'untranscodeNumber' => 'UntranscodeNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lazyTranscodedNumber) {
            $res['LazyTranscodedNumber'] = $this->lazyTranscodedNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->transcodeStreamCountDetails) {
            $res['TranscodeStreamCountDetails'] = [];
            if (null !== $this->transcodeStreamCountDetails && \is_array($this->transcodeStreamCountDetails)) {
                $n = 0;
                foreach ($this->transcodeStreamCountDetails as $item) {
                    $res['TranscodeStreamCountDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transcodedNumber) {
            $res['TranscodedNumber'] = $this->transcodedNumber;
        }
        if (null !== $this->untranscodeNumber) {
            $res['UntranscodeNumber'] = $this->untranscodeNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamTranscodeStreamNumResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LazyTranscodedNumber'])) {
            $model->lazyTranscodedNumber = $map['LazyTranscodedNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TranscodeStreamCountDetails'])) {
            if (!empty($map['TranscodeStreamCountDetails'])) {
                $model->transcodeStreamCountDetails = [];
                $n = 0;
                foreach ($map['TranscodeStreamCountDetails'] as $item) {
                    $model->transcodeStreamCountDetails[$n++] = null !== $item ? transcodeStreamCountDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TranscodedNumber'])) {
            $model->transcodedNumber = $map['TranscodedNumber'];
        }
        if (isset($map['UntranscodeNumber'])) {
            $model->untranscodeNumber = $map['UntranscodeNumber'];
        }

        return $model;
    }
}
