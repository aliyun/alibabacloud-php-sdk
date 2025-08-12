<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPublishErrorCodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPublishErrorCodeResponseBody\realTimeCodeData\codeData;

class realTimeCodeData extends Model
{
    /**
     * @var codeData[]
     */
    public $codeData;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'codeData' => 'CodeData',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        if (\is_array($this->codeData)) {
            Model::validateArray($this->codeData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeData) {
            if (\is_array($this->codeData)) {
                $res['CodeData'] = [];
                $n1 = 0;
                foreach ($this->codeData as $item1) {
                    $res['CodeData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['CodeData'])) {
            if (!empty($map['CodeData'])) {
                $model->codeData = [];
                $n1 = 0;
                foreach ($map['CodeData'] as $item1) {
                    $model->codeData[$n1] = codeData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
