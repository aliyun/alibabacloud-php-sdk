<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $coldSqlSize;

    /**
     * @var int
     */
    public $freeColdSqlSize;

    /**
     * @var int
     */
    public $freeHotSqlSize;

    /**
     * @var int
     */
    public $hotSqlSize;

    /**
     * @var int
     */
    public $importSqlSize;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'coldSqlSize' => 'ColdSqlSize',
        'freeColdSqlSize' => 'FreeColdSqlSize',
        'freeHotSqlSize' => 'FreeHotSqlSize',
        'hotSqlSize' => 'HotSqlSize',
        'importSqlSize' => 'ImportSqlSize',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
