<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoResponseBody\videoList;

class QueryCloudRecordVideoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var videoList[]
     */
    public $videoList;
    protected $_name = [
        'requestId' => 'requestId',
        'videoList' => 'videoList',
    ];

    public function validate()
    {
        if (\is_array($this->videoList)) {
            Model::validateArray($this->videoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->videoList) {
            if (\is_array($this->videoList)) {
                $res['videoList'] = [];
                $n1               = 0;
                foreach ($this->videoList as $item1) {
                    $res['videoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['videoList'])) {
            if (!empty($map['videoList'])) {
                $model->videoList = [];
                $n1               = 0;
                foreach ($map['videoList'] as $item1) {
                    $model->videoList[$n1++] = videoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
