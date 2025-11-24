<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneGroupListResponseBody\swimLaneGroupList;

class GetSwimLaneGroupListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var swimLaneGroupList[]
     */
    public $swimLaneGroupList;
    protected $_name = [
        'requestId' => 'RequestId',
        'swimLaneGroupList' => 'SwimLaneGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->swimLaneGroupList)) {
            Model::validateArray($this->swimLaneGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->swimLaneGroupList) {
            if (\is_array($this->swimLaneGroupList)) {
                $res['SwimLaneGroupList'] = [];
                $n1 = 0;
                foreach ($this->swimLaneGroupList as $item1) {
                    $res['SwimLaneGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SwimLaneGroupList'])) {
            if (!empty($map['SwimLaneGroupList'])) {
                $model->swimLaneGroupList = [];
                $n1 = 0;
                foreach ($map['SwimLaneGroupList'] as $item1) {
                    $model->swimLaneGroupList[$n1] = swimLaneGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
