<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 8585901
     *
     * @var int
     */
    public $coldSqlSize;

    /**
     * @example 5041450
     *
     * @var int
     */
    public $freeColdSqlSize;

    /**
     * @example 297245
     *
     * @var int
     */
    public $freeHotSqlSize;

    /**
     * @example 1118042
     *
     * @var int
     */
    public $hotSqlSize;

    /**
     * @example 23
     *
     * @var int
     */
    public $importSqlSize;

    /**
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
