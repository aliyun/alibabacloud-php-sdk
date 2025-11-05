<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListResourceGroupAssociateProjectsResponseBody extends Model
{
    /**
     * @var int[]
     */
    public $projectIdList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'projectIdList' => 'ProjectIdList',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->projectIdList)) {
            Model::validateArray($this->projectIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectIdList) {
            if (\is_array($this->projectIdList)) {
                $res['ProjectIdList'] = [];
                $n1 = 0;
                foreach ($this->projectIdList as $item1) {
                    $res['ProjectIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ProjectIdList'])) {
            if (!empty($map['ProjectIdList'])) {
                $model->projectIdList = [];
                $n1 = 0;
                foreach ($map['ProjectIdList'] as $item1) {
                    $model->projectIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
