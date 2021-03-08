<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAICaptionExtractionJobsResponseBody\AICaptionExtractionJobList;
use AlibabaCloud\Tea\Model;

class GetAICaptionExtractionJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var AICaptionExtractionJobList[]
     */
    public $AICaptionExtractionJobList;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'AICaptionExtractionJobList' => 'AICaptionExtractionJobList',
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
        if (null !== $this->AICaptionExtractionJobList) {
            $res['AICaptionExtractionJobList'] = [];
            if (null !== $this->AICaptionExtractionJobList && \is_array($this->AICaptionExtractionJobList)) {
                $n = 0;
                foreach ($this->AICaptionExtractionJobList as $item) {
                    $res['AICaptionExtractionJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAICaptionExtractionJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AICaptionExtractionJobList'])) {
            if (!empty($map['AICaptionExtractionJobList'])) {
                $model->AICaptionExtractionJobList = [];
                $n                                 = 0;
                foreach ($map['AICaptionExtractionJobList'] as $item) {
                    $model->AICaptionExtractionJobList[$n++] = null !== $item ? AICaptionExtractionJobList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
