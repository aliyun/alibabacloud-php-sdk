<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody\storageUsage;

use AlibabaCloud\Dara\Model;

class oss extends Model
{
    /**
     * @var int
     */
    public $standardStorageSize;
    protected $_name = [
        'standardStorageSize' => 'StandardStorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->standardStorageSize) {
            $res['StandardStorageSize'] = $this->standardStorageSize;
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
        if (isset($map['StandardStorageSize'])) {
            $model->standardStorageSize = $map['StandardStorageSize'];
        }

        return $model;
    }
}
