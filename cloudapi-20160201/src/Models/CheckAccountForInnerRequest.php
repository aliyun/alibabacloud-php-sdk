<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class CheckAccountForInnerRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;
    protected $_name = [
        'aliUid' => 'AliUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckAccountForInnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        return $model;
    }
}
