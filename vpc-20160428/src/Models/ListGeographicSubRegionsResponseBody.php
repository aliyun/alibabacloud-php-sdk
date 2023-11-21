<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListGeographicSubRegionsResponseBody extends Model
{
    /**
     * @description The number of entries.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The region list.
     *
     * @var string[]
     */
    public $geographicSubRegions;

    /**
     * @description The request ID.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'                => 'Count',
        'geographicSubRegions' => 'GeographicSubRegions',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->geographicSubRegions) {
            $res['GeographicSubRegions'] = $this->geographicSubRegions;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGeographicSubRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['GeographicSubRegions'])) {
            if (!empty($map['GeographicSubRegions'])) {
                $model->geographicSubRegions = $map['GeographicSubRegions'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
