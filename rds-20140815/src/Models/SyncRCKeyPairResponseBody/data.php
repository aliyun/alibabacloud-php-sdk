<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\SyncRCKeyPairResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isSyncInfo;
    protected $_name = [
        'isSyncInfo' => 'IsSyncInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isSyncInfo) {
            $res['IsSyncInfo'] = $this->isSyncInfo;
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
        if (isset($map['IsSyncInfo'])) {
            $model->isSyncInfo = $map['IsSyncInfo'];
        }

        return $model;
    }
}
