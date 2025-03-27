<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAvatarProjectResponseBody\queryAvatarProjectResultList;

class ListAvatarProjectResponseBody extends Model
{
    /**
     * @var queryAvatarProjectResultList[]
     */
    public $queryAvatarProjectResultList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryAvatarProjectResultList' => 'queryAvatarProjectResultList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->queryAvatarProjectResultList)) {
            Model::validateArray($this->queryAvatarProjectResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryAvatarProjectResultList) {
            if (\is_array($this->queryAvatarProjectResultList)) {
                $res['queryAvatarProjectResultList'] = [];
                $n1 = 0;
                foreach ($this->queryAvatarProjectResultList as $item1) {
                    $res['queryAvatarProjectResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['queryAvatarProjectResultList'])) {
            if (!empty($map['queryAvatarProjectResultList'])) {
                $model->queryAvatarProjectResultList = [];
                $n1 = 0;
                foreach ($map['queryAvatarProjectResultList'] as $item1) {
                    $model->queryAvatarProjectResultList[$n1++] = queryAvatarProjectResultList::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
