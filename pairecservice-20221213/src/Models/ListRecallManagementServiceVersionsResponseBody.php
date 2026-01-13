<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementServiceVersionsResponseBody\recallManagementServiceVersions;

class ListRecallManagementServiceVersionsResponseBody extends Model
{
    /**
     * @var recallManagementServiceVersions[]
     */
    public $recallManagementServiceVersions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'recallManagementServiceVersions' => 'RecallManagementServiceVersions',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->recallManagementServiceVersions)) {
            Model::validateArray($this->recallManagementServiceVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recallManagementServiceVersions) {
            if (\is_array($this->recallManagementServiceVersions)) {
                $res['RecallManagementServiceVersions'] = [];
                $n1 = 0;
                foreach ($this->recallManagementServiceVersions as $item1) {
                    $res['RecallManagementServiceVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RecallManagementServiceVersions'])) {
            if (!empty($map['RecallManagementServiceVersions'])) {
                $model->recallManagementServiceVersions = [];
                $n1 = 0;
                foreach ($map['RecallManagementServiceVersions'] as $item1) {
                    $model->recallManagementServiceVersions[$n1] = recallManagementServiceVersions::fromMap($item1);
                    ++$n1;
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
