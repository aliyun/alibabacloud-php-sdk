<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementTableVersionsResponseBody\recallManagementTableVersions;

class ListRecallManagementTableVersionsResponseBody extends Model
{
    /**
     * @var recallManagementTableVersions[]
     */
    public $recallManagementTableVersions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'recallManagementTableVersions' => 'RecallManagementTableVersions',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->recallManagementTableVersions)) {
            Model::validateArray($this->recallManagementTableVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recallManagementTableVersions) {
            if (\is_array($this->recallManagementTableVersions)) {
                $res['RecallManagementTableVersions'] = [];
                $n1 = 0;
                foreach ($this->recallManagementTableVersions as $item1) {
                    $res['RecallManagementTableVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecallManagementTableVersions'])) {
            if (!empty($map['RecallManagementTableVersions'])) {
                $model->recallManagementTableVersions = [];
                $n1 = 0;
                foreach ($map['RecallManagementTableVersions'] as $item1) {
                    $model->recallManagementTableVersions[$n1] = recallManagementTableVersions::fromMap($item1);
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
