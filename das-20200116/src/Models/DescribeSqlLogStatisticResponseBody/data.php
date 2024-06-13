<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The size of the SQL Explorer and Audit data that is stored in cold storage. Unit: bytes.
     *
     * @example 8585901
     *
     * @var int
     */
    public $coldSqlSize;

    /**
     * @description The free quota for cold data storage. Unit: bytes.
     *
     * @example 5041450
     *
     * @var int
     */
    public $freeColdSqlSize;

    /**
     * @description The free quota for hot data storage. Unit: bytes.
     *
     * @example 297245
     *
     * @var int
     */
    public $freeHotSqlSize;

    /**
     * @description The size of the SQL Explorer and Audit data that is stored in hot storage. Unit: bytes.
     *
     * @example 1118042
     *
     * @var int
     */
    public $hotSqlSize;

    /**
     * @description The size of the SQL Explorer and Audit data that was generated in the most recent day. Unit: bytes.
     *
     * @example 23
     *
     * @var int
     */
    public $importSqlSize;

    /**
     * @description The timestamp. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1712568564928
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'coldSqlSize'     => 'ColdSqlSize',
        'freeColdSqlSize' => 'FreeColdSqlSize',
        'freeHotSqlSize'  => 'FreeHotSqlSize',
        'hotSqlSize'      => 'HotSqlSize',
        'importSqlSize'   => 'ImportSqlSize',
        'timestamp'       => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldSqlSize) {
            $res['ColdSqlSize'] = $this->coldSqlSize;
        }
        if (null !== $this->freeColdSqlSize) {
            $res['FreeColdSqlSize'] = $this->freeColdSqlSize;
        }
        if (null !== $this->freeHotSqlSize) {
            $res['FreeHotSqlSize'] = $this->freeHotSqlSize;
        }
        if (null !== $this->hotSqlSize) {
            $res['HotSqlSize'] = $this->hotSqlSize;
        }
        if (null !== $this->importSqlSize) {
            $res['ImportSqlSize'] = $this->importSqlSize;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdSqlSize'])) {
            $model->coldSqlSize = $map['ColdSqlSize'];
        }
        if (isset($map['FreeColdSqlSize'])) {
            $model->freeColdSqlSize = $map['FreeColdSqlSize'];
        }
        if (isset($map['FreeHotSqlSize'])) {
            $model->freeHotSqlSize = $map['FreeHotSqlSize'];
        }
        if (isset($map['HotSqlSize'])) {
            $model->hotSqlSize = $map['HotSqlSize'];
        }
        if (isset($map['ImportSqlSize'])) {
            $model->importSqlSize = $map['ImportSqlSize'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
