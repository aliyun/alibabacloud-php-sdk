<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneListResponseBody\swimLaneList;

class GetSwimLaneListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var swimLaneList[]
     */
    public $swimLaneList;
    protected $_name = [
        'requestId' => 'RequestId',
        'swimLaneList' => 'SwimLaneList',
    ];

    public function validate()
    {
        if (\is_array($this->swimLaneList)) {
            Model::validateArray($this->swimLaneList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->swimLaneList) {
            if (\is_array($this->swimLaneList)) {
                $res['SwimLaneList'] = [];
                $n1 = 0;
                foreach ($this->swimLaneList as $item1) {
                    $res['SwimLaneList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SwimLaneList'])) {
            if (!empty($map['SwimLaneList'])) {
                $model->swimLaneList = [];
                $n1 = 0;
                foreach ($map['SwimLaneList'] as $item1) {
                    $model->swimLaneList[$n1] = swimLaneList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
