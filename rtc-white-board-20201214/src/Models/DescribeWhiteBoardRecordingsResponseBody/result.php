<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeWhiteBoardRecordingsResponseBody;

use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeWhiteBoardRecordingsResponseBody\result\recordingList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @description 录制信息列表
     *
     * @var recordingList[]
     */
    public $recordingList;
    protected $_name = [
        'totalNum'      => 'TotalNum',
        'totalPage'     => 'TotalPage',
        'recordingList' => 'RecordingList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->recordingList) {
            $res['RecordingList'] = [];
            if (null !== $this->recordingList && \is_array($this->recordingList)) {
                $n = 0;
                foreach ($this->recordingList as $item) {
                    $res['RecordingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['RecordingList'])) {
            if (!empty($map['RecordingList'])) {
                $model->recordingList = [];
                $n                    = 0;
                foreach ($map['RecordingList'] as $item) {
                    $model->recordingList[$n++] = null !== $item ? recordingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
