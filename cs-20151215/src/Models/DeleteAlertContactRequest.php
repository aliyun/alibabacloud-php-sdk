<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlertContactRequest extends Model
{
    /**
     * @var int[]
     */
    public $contactIds;
    protected $_name = [
        'contactIds' => 'contact_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactIds) {
            $res['contact_ids'] = $this->contactIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlertContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contact_ids'])) {
            if (!empty($map['contact_ids'])) {
                $model->contactIds = $map['contact_ids'];
            }
        }

        return $model;
    }
}
