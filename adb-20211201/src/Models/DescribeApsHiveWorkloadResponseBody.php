<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsHiveWorkloadResponseBody\apsWorkload;

class DescribeApsHiveWorkloadResponseBody extends Model
{
    /**
     * @var apsWorkload
     */
    public $apsWorkload;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apsWorkload' => 'ApsWorkload',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->apsWorkload) {
            $this->apsWorkload->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apsWorkload) {
            $res['ApsWorkload'] = null !== $this->apsWorkload ? $this->apsWorkload->toArray($noStream) : $this->apsWorkload;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ApsWorkload'])) {
            $model->apsWorkload = apsWorkload::fromMap($map['ApsWorkload']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
