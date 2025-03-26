<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponseBody\collationTimeZones;

class DescribeCollationTimeZonesResponseBody extends Model
{
    /**
     * @var collationTimeZones
     */
    public $collationTimeZones;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'collationTimeZones' => 'CollationTimeZones',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->collationTimeZones) {
            $this->collationTimeZones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collationTimeZones) {
            $res['CollationTimeZones'] = null !== $this->collationTimeZones ? $this->collationTimeZones->toArray($noStream) : $this->collationTimeZones;
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
        if (isset($map['CollationTimeZones'])) {
            $model->collationTimeZones = collationTimeZones::fromMap($map['CollationTimeZones']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
