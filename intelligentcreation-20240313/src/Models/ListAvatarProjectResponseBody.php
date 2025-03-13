<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAvatarProjectResponseBody\queryAvatarProjectResultList;
use AlibabaCloud\Tea\Model;

class ListAvatarProjectResponseBody extends Model
{
    /**
     * @var queryAvatarProjectResultList[]
     */
    public $queryAvatarProjectResultList;

    /**
     * @example D7F2B74F-63F2-5DD6-95E4-F408EAD6617E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryAvatarProjectResultList' => 'queryAvatarProjectResultList',
        'requestId'                    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryAvatarProjectResultList) {
            $res['queryAvatarProjectResultList'] = [];
            if (null !== $this->queryAvatarProjectResultList && \is_array($this->queryAvatarProjectResultList)) {
                $n = 0;
                foreach ($this->queryAvatarProjectResultList as $item) {
                    $res['queryAvatarProjectResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvatarProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['queryAvatarProjectResultList'])) {
            if (!empty($map['queryAvatarProjectResultList'])) {
                $model->queryAvatarProjectResultList = [];
                $n                                   = 0;
                foreach ($map['queryAvatarProjectResultList'] as $item) {
                    $model->queryAvatarProjectResultList[$n++] = null !== $item ? queryAvatarProjectResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
