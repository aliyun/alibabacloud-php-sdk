<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotePhrasesResponseBody\phrases;
use AlibabaCloud\Tea\Model;

class DescribeCloudNotePhrasesResponseBody extends Model
{
    /**
     * @var phrases[]
     */
    public $phrases;

    /**
     * @description Id of the request。
     *
     * @example 3A26E1E3-3CBB-599E-AD68-CB78F5A42FA1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'phrases' => 'Phrases',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->phrases) {
            $res['Phrases'] = [];
            if (null !== $this->phrases && \is_array($this->phrases)) {
                $n = 0;
                foreach ($this->phrases as $item) {
                    $res['Phrases'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeCloudNotePhrasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phrases'])) {
            if (!empty($map['Phrases'])) {
                $model->phrases = [];
                $n = 0;
                foreach ($map['Phrases'] as $item) {
                    $model->phrases[$n++] = null !== $item ? phrases::fromMap($item) : $item;
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
