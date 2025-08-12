<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeStreamNumResponseBody\transcodeStreamCountDetails;

class DescribeLiveStreamTranscodeStreamNumResponseBody extends Model
{
    /**
     * @var int
     */
    public $lazyTranscodedNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var transcodeStreamCountDetails[]
     */
    public $transcodeStreamCountDetails;

    /**
     * @var int
     */
    public $transcodedNumber;

    /**
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

    public function validate()
    {
        if (\is_array($this->transcodeStreamCountDetails)) {
            Model::validateArray($this->transcodeStreamCountDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->transcodeStreamCountDetails)) {
                $res['TranscodeStreamCountDetails'] = [];
                $n1 = 0;
                foreach ($this->transcodeStreamCountDetails as $item1) {
                    $res['TranscodeStreamCountDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['TranscodeStreamCountDetails'] as $item1) {
                    $model->transcodeStreamCountDetails[$n1] = transcodeStreamCountDetails::fromMap($item1);
                    ++$n1;
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
