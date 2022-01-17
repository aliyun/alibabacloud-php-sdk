<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result\imageProduct;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var int
     */
    public $unusedQuota;

    /**
     * @var int
     */
    public $usingQuota;
    protected $_name = [
        'totalQuota'  => 'TotalQuota',
        'unusedQuota' => 'UnusedQuota',
        'usingQuota'  => 'UsingQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }
        if (null !== $this->unusedQuota) {
            $res['UnusedQuota'] = $this->unusedQuota;
        }
        if (null !== $this->usingQuota) {
            $res['UsingQuota'] = $this->usingQuota;
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
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }
        if (isset($map['UnusedQuota'])) {
            $model->unusedQuota = $map['UnusedQuota'];
        }
        if (isset($map['UsingQuota'])) {
            $model->usingQuota = $map['UsingQuota'];
        }

        return $model;
    }
}
