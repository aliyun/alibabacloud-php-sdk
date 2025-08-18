<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAuthorizedAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAuthorizedAppsResponseBody\pageResult\authorizedAppList;

class pageResult extends Model
{
    /**
     * @var authorizedAppList[]
     */
    public $authorizedAppList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authorizedAppList' => 'AuthorizedAppList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedAppList)) {
            Model::validateArray($this->authorizedAppList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedAppList) {
            if (\is_array($this->authorizedAppList)) {
                $res['AuthorizedAppList'] = [];
                $n1 = 0;
                foreach ($this->authorizedAppList as $item1) {
                    $res['AuthorizedAppList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AuthorizedAppList'])) {
            if (!empty($map['AuthorizedAppList'])) {
                $model->authorizedAppList = [];
                $n1 = 0;
                foreach ($map['AuthorizedAppList'] as $item1) {
                    $model->authorizedAppList[$n1] = authorizedAppList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
