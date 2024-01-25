<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentLicenseResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 3c35c6fa-c080-444b-89ac-xxxxxxxxxxxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'uid' => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
