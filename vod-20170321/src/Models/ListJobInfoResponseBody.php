<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListJobInfoResponseBody\jobInfoList;

class ListJobInfoResponseBody extends Model
{
    /**
     * @var jobInfoList[]
     */
    public $jobInfoList;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobInfoList' => 'JobInfoList',
        'jobType' => 'JobType',
        'mediaId' => 'MediaId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->jobInfoList)) {
            Model::validateArray($this->jobInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobInfoList) {
            if (\is_array($this->jobInfoList)) {
                $res['JobInfoList'] = [];
                $n1 = 0;
                foreach ($this->jobInfoList as $item1) {
                    $res['JobInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['JobInfoList'])) {
            if (!empty($map['JobInfoList'])) {
                $model->jobInfoList = [];
                $n1 = 0;
                foreach ($map['JobInfoList'] as $item1) {
                    $model->jobInfoList[$n1] = jobInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
