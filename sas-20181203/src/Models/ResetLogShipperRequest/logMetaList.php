<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ResetLogShipperRequest;

use AlibabaCloud\Tea\Model;

class logMetaList extends Model
{
    /**
     * @description The Logstore that you want to configure.
     *
     * >  You can call the [DescribeLogMeta](~~DescribeLogMeta~~) operation to query the Logstore.
     *
     * @example sas-security-log
     *
     * @var string
     */
    public $configLogStore;

    /**
     * @description The retention period of hot data in the Logstore.
     *
     * >  The value of this parameter must be at least 7 and smaller than the log retention period. Unit: days. If you specify this parameter for the Logstore, the global retention period of hot data specified by the HotTtl parameter is overwritten.
     *
     * @example 7
     *
     * @var int
     */
    public $hotTtl;

    /**
     * @description The status of the log analysis feature. Valid values:
     *
     *   **disabled**
     *   **enabled**
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The log retention period of the Logstore.
     *
     * >  If you specify this parameter for the Logstore, the global log retention period specified by the Ttl parameter is overwritten.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'configLogStore' => 'ConfigLogStore',
        'hotTtl' => 'HotTtl',
        'status' => 'Status',
        'ttl' => 'Ttl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configLogStore) {
            $res['ConfigLogStore'] = $this->configLogStore;
        }
        if (null !== $this->hotTtl) {
            $res['HotTtl'] = $this->hotTtl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigLogStore'])) {
            $model->configLogStore = $map['ConfigLogStore'];
        }
        if (isset($map['HotTtl'])) {
            $model->hotTtl = $map['HotTtl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
