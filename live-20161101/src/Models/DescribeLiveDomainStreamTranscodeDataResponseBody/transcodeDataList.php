<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataResponseBody\transcodeDataList\transcodeData;

class transcodeDataList extends Model
{
    /**
     * @var transcodeData[]
     */
    public $transcodeData;
    protected $_name = [
        'transcodeData' => 'TranscodeData',
    ];

    public function validate()
    {
        if (\is_array($this->transcodeData)) {
            Model::validateArray($this->transcodeData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transcodeData) {
            if (\is_array($this->transcodeData)) {
                $res['TranscodeData'] = [];
                $n1 = 0;
                foreach ($this->transcodeData as $item1) {
                    $res['TranscodeData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TranscodeData'])) {
            if (!empty($map['TranscodeData'])) {
                $model->transcodeData = [];
                $n1 = 0;
                foreach ($map['TranscodeData'] as $item1) {
                    $model->transcodeData[$n1] = transcodeData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
