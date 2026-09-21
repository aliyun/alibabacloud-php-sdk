<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels;

use AlibabaCloud\Dara\Model;

class userLimit extends Model
{
    /**
     * @var int
     */
    public $userQuota;
    protected $_name = [
        'userQuota' => 'UserQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userQuota) {
            $res['UserQuota'] = $this->userQuota;
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
        if (isset($map['UserQuota'])) {
            $model->userQuota = $map['UserQuota'];
        }

        return $model;
    }
}
