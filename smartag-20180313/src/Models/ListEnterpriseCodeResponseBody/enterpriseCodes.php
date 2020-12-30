<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListEnterpriseCodeResponseBody;

use AlibabaCloud\Tea\Model;

class enterpriseCodes extends Model
{
    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $smartAGCount;

    /**
     * @var string
     */
    public $enterpriseCode;
    protected $_name = [
        'isDefault'      => 'IsDefault',
        'smartAGCount'   => 'SmartAGCount',
        'enterpriseCode' => 'EnterpriseCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->smartAGCount) {
            $res['SmartAGCount'] = $this->smartAGCount;
        }
        if (null !== $this->enterpriseCode) {
            $res['EnterpriseCode'] = $this->enterpriseCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enterpriseCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['SmartAGCount'])) {
            $model->smartAGCount = $map['SmartAGCount'];
        }
        if (isset($map['EnterpriseCode'])) {
            $model->enterpriseCode = $map['EnterpriseCode'];
        }

        return $model;
    }
}
