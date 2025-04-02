<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest\reservationAuthority\authorizedMembers;

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
        if (\is_array($this->authorizedMembers)) {
            Model::validateArray($this->authorizedMembers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedMembers) {
            if (\is_array($this->authorizedMembers)) {
                $res['AuthorizedMembers'] = [];
                $n1 = 0;
                foreach ($this->authorizedMembers as $item1) {
                    $res['AuthorizedMembers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AuthorizedMembers'])) {
            if (!empty($map['AuthorizedMembers'])) {
                $model->authorizedMembers = [];
                $n1 = 0;
                foreach ($map['AuthorizedMembers'] as $item1) {
                    $model->authorizedMembers[$n1++] = authorizedMembers::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
