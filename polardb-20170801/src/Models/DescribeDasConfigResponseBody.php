<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDasConfigResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 593AE1C5-B70C-463F-9207-074639******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Specifies whether to enable automatic storage scaling for the Standard Edition cluster. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $storageAutoScale;

    /**
     * @description The maximum storage capacity that is allowed for storage automatic scaling of the Standard Edition cluster. Unit: GB.
     *
     * >  This parameter is valid only when the StorageAutoScale parameter is set to Enable.
     *
     * @example 800
     *
     * @var int
     */
    public $storageUpperBound;
    protected $_name = [
        'requestId' => 'RequestId',
        'storageAutoScale' => 'StorageAutoScale',
        'storageUpperBound' => 'StorageUpperBound',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageAutoScale) {
            $res['StorageAutoScale'] = $this->storageAutoScale;
        }
        if (null !== $this->storageUpperBound) {
            $res['StorageUpperBound'] = $this->storageUpperBound;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDasConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageAutoScale'])) {
            $model->storageAutoScale = $map['StorageAutoScale'];
        }
        if (isset($map['StorageUpperBound'])) {
            $model->storageUpperBound = $map['StorageUpperBound'];
        }

        return $model;
    }
}
