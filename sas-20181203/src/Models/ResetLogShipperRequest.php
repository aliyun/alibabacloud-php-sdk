<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ResetLogShipperRequest\logMetaList;
use AlibabaCloud\Tea\Model;

class ResetLogShipperRequest extends Model
{
    /**
     * @description The global retention period of hot data.
     *
     * >  The value of this parameter must be at least 7 and smaller than the log retention period. Unit: days.
     * @example 7
     *
     * @var int
     */
    public $hotTtl;

    /**
     * @description The settings of the log analysis feature.
     *
     * @var logMetaList[]
     */
    public $logMetaList;

    /**
     * @description The global log retention period.
     *
     * >  This parameter is supported only when the log analysis feature uses the pay-as-you-go billing method.
     * @example 180
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'hotTtl'      => 'HotTtl',
        'logMetaList' => 'LogMetaList',
        'ttl'         => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotTtl) {
            $res['HotTtl'] = $this->hotTtl;
        }
        if (null !== $this->logMetaList) {
            $res['LogMetaList'] = [];
            if (null !== $this->logMetaList && \is_array($this->logMetaList)) {
                $n = 0;
                foreach ($this->logMetaList as $item) {
                    $res['LogMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetLogShipperRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotTtl'])) {
            $model->hotTtl = $map['HotTtl'];
        }
        if (isset($map['LogMetaList'])) {
            if (!empty($map['LogMetaList'])) {
                $model->logMetaList = [];
                $n                  = 0;
                foreach ($map['LogMetaList'] as $item) {
                    $model->logMetaList[$n++] = null !== $item ? logMetaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
