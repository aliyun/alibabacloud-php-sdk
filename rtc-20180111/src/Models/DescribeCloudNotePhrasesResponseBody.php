<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotePhrasesResponseBody\phrases;

class DescribeCloudNotePhrasesResponseBody extends Model
{
    /**
     * @var phrases[]
     */
    public $phrases;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'phrases' => 'Phrases',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate()
    {
        if (\is_array($this->phrases)) {
            Model::validateArray($this->phrases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phrases) {
            if (\is_array($this->phrases)) {
                $res['Phrases'] = [];
                $n1 = 0;
                foreach ($this->phrases as $item1) {
                    $res['Phrases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
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
        if (isset($map['Phrases'])) {
            if (!empty($map['Phrases'])) {
                $model->phrases = [];
                $n1 = 0;
                foreach ($map['Phrases'] as $item1) {
                    $model->phrases[$n1] = phrases::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
