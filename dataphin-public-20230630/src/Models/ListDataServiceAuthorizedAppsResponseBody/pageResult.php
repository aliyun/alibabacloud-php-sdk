<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAuthorizedAppsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAuthorizedAppsResponseBody\pageResult\authorizedAppList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var authorizedAppList[]
     */
    public $authorizedAppList;

    /**
     * @example 68
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authorizedAppList' => 'AuthorizedAppList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedAppList) {
            $res['AuthorizedAppList'] = [];
            if (null !== $this->authorizedAppList && \is_array($this->authorizedAppList)) {
                $n = 0;
                foreach ($this->authorizedAppList as $item) {
                    $res['AuthorizedAppList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedAppList'])) {
            if (!empty($map['AuthorizedAppList'])) {
                $model->authorizedAppList = [];
                $n = 0;
                foreach ($map['AuthorizedAppList'] as $item) {
                    $model->authorizedAppList[$n++] = null !== $item ? authorizedAppList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
