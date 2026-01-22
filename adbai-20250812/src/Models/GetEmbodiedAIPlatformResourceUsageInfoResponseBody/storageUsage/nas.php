<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody\storageUsage;

use AlibabaCloud\Dara\Model;

class nas extends Model
{
    /**
     * @var int
     */
    public $meteredSize;
    protected $_name = [
        'meteredSize' => 'MeteredSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
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
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }

        return $model;
    }
}
