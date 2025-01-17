<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class QueryIncidentSubNodesCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int[]
     */
    public $subNodesCount;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'     => 'RequestId',
        'subNodesCount' => 'SubNodesCount',
        'success'       => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->subNodesCount)) {
            Model::validateArray($this->subNodesCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subNodesCount) {
            if (\is_array($this->subNodesCount)) {
                $res['SubNodesCount'] = [];
                foreach ($this->subNodesCount as $key1 => $value1) {
                    $res['SubNodesCount'][$key1] = $value1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SubNodesCount'])) {
            if (!empty($map['SubNodesCount'])) {
                $model->subNodesCount = [];
                foreach ($map['SubNodesCount'] as $key1 => $value1) {
                    $model->subNodesCount[$key1] = $value1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
