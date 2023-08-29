<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class StorageFormat extends Model
{
    /**
     * @var int
     */
    public $avro;

    /**
     * @var int
     */
    public $csv;

    /**
     * @var int
     */
    public $delta;

    /**
     * @var int
     */
    public $hudi;

    /**
     * @var int
     */
    public $iceberg;

    /**
     * @var int
     */
    public $json;

    /**
     * @var int
     */
    public $orc;

    /**
     * @var int
     */
    public $parquet;

    /**
     * @var int
     */
    public $uncategorized;
    protected $_name = [
        'avro'          => 'Avro',
        'csv'           => 'Csv',
        'delta'         => 'Delta',
        'hudi'          => 'Hudi',
        'iceberg'       => 'Iceberg',
        'json'          => 'Json',
        'orc'           => 'Orc',
        'parquet'       => 'Parquet',
        'uncategorized' => 'Uncategorized',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avro) {
            $res['Avro'] = $this->avro;
        }
        if (null !== $this->csv) {
            $res['Csv'] = $this->csv;
        }
        if (null !== $this->delta) {
            $res['Delta'] = $this->delta;
        }
        if (null !== $this->hudi) {
            $res['Hudi'] = $this->hudi;
        }
        if (null !== $this->iceberg) {
            $res['Iceberg'] = $this->iceberg;
        }
        if (null !== $this->json) {
            $res['Json'] = $this->json;
        }
        if (null !== $this->orc) {
            $res['Orc'] = $this->orc;
        }
        if (null !== $this->parquet) {
            $res['Parquet'] = $this->parquet;
        }
        if (null !== $this->uncategorized) {
            $res['Uncategorized'] = $this->uncategorized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StorageFormat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Avro'])) {
            $model->avro = $map['Avro'];
        }
        if (isset($map['Csv'])) {
            $model->csv = $map['Csv'];
        }
        if (isset($map['Delta'])) {
            $model->delta = $map['Delta'];
        }
        if (isset($map['Hudi'])) {
            $model->hudi = $map['Hudi'];
        }
        if (isset($map['Iceberg'])) {
            $model->iceberg = $map['Iceberg'];
        }
        if (isset($map['Json'])) {
            $model->json = $map['Json'];
        }
        if (isset($map['Orc'])) {
            $model->orc = $map['Orc'];
        }
        if (isset($map['Parquet'])) {
            $model->parquet = $map['Parquet'];
        }
        if (isset($map['Uncategorized'])) {
            $model->uncategorized = $map['Uncategorized'];
        }

        return $model;
    }
}
