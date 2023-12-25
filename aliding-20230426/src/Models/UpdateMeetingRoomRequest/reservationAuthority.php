<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest\reservationAuthority\authorizedMembers;
use AlibabaCloud\Tea\Model;

class reservationAuthority extends Model
{
    /**
     * @var authorizedMembers[]
     */
    public $authorizedMembers;
    protected $_name = [
        'authorizedMembers' => 'AuthorizedMembers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedMembers) {
            $res['AuthorizedMembers'] = [];
            if (null !== $this->authorizedMembers && \is_array($this->authorizedMembers)) {
                $n = 0;
                foreach ($this->authorizedMembers as $item) {
                    $res['AuthorizedMembers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservationAuthority
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedMembers'])) {
            if (!empty($map['AuthorizedMembers'])) {
                $model->authorizedMembers = [];
                $n                        = 0;
                foreach ($map['AuthorizedMembers'] as $item) {
                    $model->authorizedMembers[$n++] = null !== $item ? authorizedMembers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
