<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels;

use AlibabaCloud\Dara\Model;

class authorizedUserInfo extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalUserGroupCount;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'totalUserGroupCount' => 'TotalUserGroupCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalUserGroupCount) {
            $res['TotalUserGroupCount'] = $this->totalUserGroupCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalUserGroupCount'])) {
            $model->totalUserGroupCount = $map['TotalUserGroupCount'];
        }

        return $model;
    }
}
