<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;

class AssociateMembersRequest extends Model
{
    /**
     * @var string
     */
    public $contactId;
    /**
     * @var string[]
     */
    public $members;
    protected $_name = [
        'contactId' => 'ContactId',
        'members'   => 'Members',
    ];

    public function validate()
    {
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['Members'] = [];
                $n1             = 0;
                foreach ($this->members as $item1) {
                    $res['Members'][$n1++] = $item1;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n1             = 0;
                foreach ($map['Members'] as $item1) {
                    $model->members[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
