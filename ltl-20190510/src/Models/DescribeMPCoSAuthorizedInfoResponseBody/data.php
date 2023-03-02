<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSAuthorizedInfoResponseBody;

use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSAuthorizedInfoResponseBody\data\authorizedPhaseList;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSAuthorizedInfoResponseBody\data\unAuthorizedPhaseList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var authorizedPhaseList[]
     */
    public $authorizedPhaseList;

    /**
     * @var unAuthorizedPhaseList[]
     */
    public $unAuthorizedPhaseList;
    protected $_name = [
        'authorizedPhaseList'   => 'AuthorizedPhaseList',
        'unAuthorizedPhaseList' => 'UnAuthorizedPhaseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedPhaseList) {
            $res['AuthorizedPhaseList'] = [];
            if (null !== $this->authorizedPhaseList && \is_array($this->authorizedPhaseList)) {
                $n = 0;
                foreach ($this->authorizedPhaseList as $item) {
                    $res['AuthorizedPhaseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unAuthorizedPhaseList) {
            $res['UnAuthorizedPhaseList'] = [];
            if (null !== $this->unAuthorizedPhaseList && \is_array($this->unAuthorizedPhaseList)) {
                $n = 0;
                foreach ($this->unAuthorizedPhaseList as $item) {
                    $res['UnAuthorizedPhaseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedPhaseList'])) {
            if (!empty($map['AuthorizedPhaseList'])) {
                $model->authorizedPhaseList = [];
                $n                          = 0;
                foreach ($map['AuthorizedPhaseList'] as $item) {
                    $model->authorizedPhaseList[$n++] = null !== $item ? authorizedPhaseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnAuthorizedPhaseList'])) {
            if (!empty($map['UnAuthorizedPhaseList'])) {
                $model->unAuthorizedPhaseList = [];
                $n                            = 0;
                foreach ($map['UnAuthorizedPhaseList'] as $item) {
                    $model->unAuthorizedPhaseList[$n++] = null !== $item ? unAuthorizedPhaseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
