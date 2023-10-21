<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactGroupRequest extends Model
{
    /**
     * @description The name of the alert group.
     *
     * @example contact_group_2019_templatedfkXQ
     *
     * @var string
     */
    public $contactGroupName;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }

        return $model;
    }
}
