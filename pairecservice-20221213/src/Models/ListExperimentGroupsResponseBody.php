<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListExperimentGroupsResponseBody\experimentGroups;

class ListExperimentGroupsResponseBody extends Model
{
    /**
     * @var experimentGroups[]
     */
    public $experimentGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'experimentGroups' => 'ExperimentGroups',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->experimentGroups)) {
            Model::validateArray($this->experimentGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->experimentGroups) {
            if (\is_array($this->experimentGroups)) {
                $res['ExperimentGroups'] = [];
                $n1 = 0;
                foreach ($this->experimentGroups as $item1) {
                    $res['ExperimentGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ExperimentGroups'])) {
            if (!empty($map['ExperimentGroups'])) {
                $model->experimentGroups = [];
                $n1 = 0;
                foreach ($map['ExperimentGroups'] as $item1) {
                    $model->experimentGroups[$n1++] = experimentGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
