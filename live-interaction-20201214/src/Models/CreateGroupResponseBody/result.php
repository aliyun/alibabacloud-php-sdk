<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example $2$111000
     *
     * @var string
     */
    public $appCid;
    protected $_name = [
        'appCid' => 'AppCid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }

        return $model;
    }
}
