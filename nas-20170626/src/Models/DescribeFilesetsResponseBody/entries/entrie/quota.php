<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody\entries\entrie;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @description The file quantity quota. Valid values:
     *
     *   Minimum value: 10000.
     *   Maximum value: 10000000000.
     *
     * @example 10000
     *
     * @var int
     */
    public $fileCountLimit;

    /**
     * @description The capacity quota. Unit: bytes.
     *
     *   Minimum value: 10737418240 (10 GiB).
     *   Step size: 1073741824 (1 GiB).
     *
     * @example 10737418240
     *
     * @var int
     */
    public $sizeLimit;
    protected $_name = [
        'fileCountLimit' => 'FileCountLimit',
        'sizeLimit' => 'SizeLimit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }
        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }
        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }

        return $model;
    }
}
