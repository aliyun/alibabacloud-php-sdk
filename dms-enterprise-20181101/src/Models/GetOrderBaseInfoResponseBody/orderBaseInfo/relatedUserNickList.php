<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo;

use AlibabaCloud\Tea\Model;

class relatedUserNickList extends Model
{
    /**
     * @var string[]
     */
    public $userNicks;
    protected $_name = [
        'userNicks' => 'UserNicks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userNicks) {
            $res['UserNicks'] = $this->userNicks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedUserNickList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserNicks'])) {
            if (!empty($map['UserNicks'])) {
                $model->userNicks = $map['UserNicks'];
            }
        }

        return $model;
    }
}
