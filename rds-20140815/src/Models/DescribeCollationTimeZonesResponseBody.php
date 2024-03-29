<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponseBody\collationTimeZones;
use AlibabaCloud\Tea\Model;

class DescribeCollationTimeZonesResponseBody extends Model
{
    /**
     * @description The list of the character set collations and time zones that are available.
     *
     * @var collationTimeZones
     */
    public $collationTimeZones;

    /**
     * @description The request ID.
     *
     * @example 4EAED246-DB18-4C8D-9EB5-C319626F2A77
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'collationTimeZones' => 'CollationTimeZones',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collationTimeZones) {
            $res['CollationTimeZones'] = null !== $this->collationTimeZones ? $this->collationTimeZones->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCollationTimeZonesResponseBody
     */
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
