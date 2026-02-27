<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAppsResponseBody\data\appList;

class data extends Model
{
    /**
     * @var appList[]
     */
    public $appList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appList' => 'AppList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->appList)) {
            Model::validateArray($this->appList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appList) {
            if (\is_array($this->appList)) {
                $res['AppList'] = [];
                $n1 = 0;
                foreach ($this->appList as $item1) {
                    $res['AppList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppList'])) {
            if (!empty($map['AppList'])) {
                $model->appList = [];
                $n1 = 0;
                foreach ($map['AppList'] as $item1) {
                    $model->appList[$n1] = appList::fromMap($item1);
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
