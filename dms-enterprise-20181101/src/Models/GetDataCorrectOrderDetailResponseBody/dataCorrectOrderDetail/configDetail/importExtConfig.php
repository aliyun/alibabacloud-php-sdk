<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail;

use AlibabaCloud\Tea\Model;

class importExtConfig extends Model
{
    /**
     * @var bool
     */
    public $csvFirstRowIsColumnDef;

    /**
     * @var bool
     */
    public $ignoreError;

    /**
     * @var string
     */
    public $importMode;

    /**
     * @var string
     */
    public $insertType;
    protected $_name = [
        'csvFirstRowIsColumnDef' => 'CsvFirstRowIsColumnDef',
        'ignoreError'            => 'IgnoreError',
        'importMode'             => 'ImportMode',
        'insertType'             => 'InsertType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csvFirstRowIsColumnDef) {
            $res['CsvFirstRowIsColumnDef'] = $this->csvFirstRowIsColumnDef;
        }
        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }
        if (null !== $this->importMode) {
            $res['ImportMode'] = $this->importMode;
        }
        if (null !== $this->insertType) {
            $res['InsertType'] = $this->insertType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importExtConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsvFirstRowIsColumnDef'])) {
            $model->csvFirstRowIsColumnDef = $map['CsvFirstRowIsColumnDef'];
        }
        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }
        if (isset($map['ImportMode'])) {
            $model->importMode = $map['ImportMode'];
        }
        if (isset($map['InsertType'])) {
            $model->insertType = $map['InsertType'];
        }

        return $model;
    }
}
