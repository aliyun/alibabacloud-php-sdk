<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAICaptionExtractionJobsResponseBody\AICaptionExtractionJobList;

class GetAICaptionExtractionJobsResponseBody extends Model
{
    /**
     * @var AICaptionExtractionJobList[]
     */
    public $AICaptionExtractionJobList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AICaptionExtractionJobList' => 'AICaptionExtractionJobList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->AICaptionExtractionJobList)) {
            Model::validateArray($this->AICaptionExtractionJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AICaptionExtractionJobList) {
            if (\is_array($this->AICaptionExtractionJobList)) {
                $res['AICaptionExtractionJobList'] = [];
                $n1 = 0;
                foreach ($this->AICaptionExtractionJobList as $item1) {
                    $res['AICaptionExtractionJobList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AICaptionExtractionJobList'])) {
            if (!empty($map['AICaptionExtractionJobList'])) {
                $model->AICaptionExtractionJobList = [];
                $n1 = 0;
                foreach ($map['AICaptionExtractionJobList'] as $item1) {
                    $model->AICaptionExtractionJobList[$n1] = AICaptionExtractionJobList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
