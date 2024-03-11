<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\subProductInfos;

use AlibabaCloud\Tea\Model;

class subProduct extends Model
{
    /**
     * @var bool
     */
    public $display;

    /**
     * @var mixed[]
     */
    public $extendProperties;

    /**
     * @var string
     */
    public $subProductCode;

    /**
     * @var string
     */
    public $subProductName;

    /**
     * @var string
     */
    public $subProductState;
    protected $_name = [
        'display'          => 'display',
        'extendProperties' => 'extendProperties',
        'subProductCode'   => 'subProductCode',
        'subProductName'   => 'subProductName',
        'subProductState'  => 'subProductState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->display) {
            $res['display'] = $this->display;
        }
        if (null !== $this->extendProperties) {
            $res['extendProperties'] = $this->extendProperties;
        }
        if (null !== $this->subProductCode) {
            $res['subProductCode'] = $this->subProductCode;
        }
        if (null !== $this->subProductName) {
            $res['subProductName'] = $this->subProductName;
        }
        if (null !== $this->subProductState) {
            $res['subProductState'] = $this->subProductState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subProduct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['display'])) {
            $model->display = $map['display'];
        }
        if (isset($map['extendProperties'])) {
            $model->extendProperties = $map['extendProperties'];
        }
        if (isset($map['subProductCode'])) {
            $model->subProductCode = $map['subProductCode'];
        }
        if (isset($map['subProductName'])) {
            $model->subProductName = $map['subProductName'];
        }
        if (isset($map['subProductState'])) {
            $model->subProductState = $map['subProductState'];
        }

        return $model;
    }
}
