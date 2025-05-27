<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAllProdsResponseBody\data;

use AlibabaCloud\Dara\Model;

class prodList extends Model
{
    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var int
     */
    public $importedLogCount;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $totalLogCount;
    protected $_name = [
        'cloudCode' => 'CloudCode',
        'importedLogCount' => 'ImportedLogCount',
        'modifyTime' => 'ModifyTime',
        'prodCode' => 'ProdCode',
        'totalLogCount' => 'TotalLogCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }

        if (null !== $this->importedLogCount) {
            $res['ImportedLogCount'] = $this->importedLogCount;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->totalLogCount) {
            $res['TotalLogCount'] = $this->totalLogCount;
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
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }

        if (isset($map['ImportedLogCount'])) {
            $model->importedLogCount = $map['ImportedLogCount'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['TotalLogCount'])) {
            $model->totalLogCount = $map['TotalLogCount'];
        }

        return $model;
    }
}
