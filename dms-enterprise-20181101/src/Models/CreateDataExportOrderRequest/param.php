<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @var string
     */
    public $execSQL;
    protected $_name = [
        'classify'   => 'Classify',
        'dbItemList' => 'DbItemList',
        'execSQL'    => 'ExecSQL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->dbItemList) {
            $res['DbItemList'] = [];
            if (null !== $this->dbItemList && \is_array($this->dbItemList)) {
                $n = 0;
                foreach ($this->dbItemList as $item) {
                    $res['DbItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->execSQL) {
            $res['ExecSQL'] = $this->execSQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n                 = 0;
                foreach ($map['DbItemList'] as $item) {
                    $model->dbItemList[$n++] = null !== $item ? dbItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExecSQL'])) {
            $model->execSQL = $map['ExecSQL'];
        }

        return $model;
    }
}
