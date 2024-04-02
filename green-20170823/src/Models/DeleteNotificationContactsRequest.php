<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DeleteNotificationContactsRequest extends Model
{
    /**
     * @var string
     */
    public $contactTypes;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'contactTypes' => 'ContactTypes',
        'lang'         => 'Lang',
        'sourceIp'     => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactTypes) {
            $res['ContactTypes'] = $this->contactTypes;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNotificationContactsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactTypes'])) {
            $model->contactTypes = $map['ContactTypes'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
