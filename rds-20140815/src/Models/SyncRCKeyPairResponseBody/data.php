<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\SyncRCKeyPairResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isSyncInfo;
    protected $_name = [
        'isSyncInfo' => 'IsSyncInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSyncInfo) {
            $res['IsSyncInfo'] = $this->isSyncInfo;
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
        if (isset($map['IsSyncInfo'])) {
            $model->isSyncInfo = $map['IsSyncInfo'];
        }

        return $model;
    }
}
