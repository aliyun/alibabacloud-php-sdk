<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListDetectConfigRelationsResponseBody\detectConfigRelations;

class ListDetectConfigRelationsResponseBody extends Model
{
    /**
     * @var detectConfigRelations[]
     */
    public $detectConfigRelations;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'detectConfigRelations' => 'detectConfigRelations',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->detectConfigRelations)) {
            Model::validateArray($this->detectConfigRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectConfigRelations) {
            if (\is_array($this->detectConfigRelations)) {
                $res['detectConfigRelations'] = [];
                $n1 = 0;
                foreach ($this->detectConfigRelations as $item1) {
                    $res['detectConfigRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['detectConfigRelations'])) {
            if (!empty($map['detectConfigRelations'])) {
                $model->detectConfigRelations = [];
                $n1 = 0;
                foreach ($map['detectConfigRelations'] as $item1) {
                    $model->detectConfigRelations[$n1] = detectConfigRelations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
