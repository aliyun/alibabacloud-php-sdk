<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasResponseBody;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasResponseBody\quotas\specs;
use AlibabaCloud\Tea\Model;

class quotas extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 1828233
     *
     * @var string
     */
    public $id;

    /**
     * @example isolate
     *
     * @var string
     */
    public $mode;

    /**
     * @example quota-name
     *
     * @var string
     */
    public $name;

    /**
     * @example MaxCompute_share
     *
     * @var string
     */
    public $productCode;

    /**
     * @example MaxCompute
     *
     * @var string
     */
    public $quotaType;

    /**
     * @example {\"cu\":\"11500\",\"minCu\":\"2300\",\"parentId\":\"0\"}
     *
     * @var specs[]
     */
    public $specs;
    protected $_name = [
        'displayName' => 'DisplayName',
        'id'          => 'Id',
        'mode'        => 'Mode',
        'name'        => 'Name',
        'productCode' => 'ProductCode',
        'quotaType'   => 'QuotaType',
        'specs'       => 'Specs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }
        if (null !== $this->specs) {
            $res['Specs'] = [];
            if (null !== $this->specs && \is_array($this->specs)) {
                $n = 0;
                foreach ($this->specs as $item) {
                    $res['Specs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }
        if (isset($map['Specs'])) {
            if (!empty($map['Specs'])) {
                $model->specs = [];
                $n            = 0;
                foreach ($map['Specs'] as $item) {
                    $model->specs[$n++] = null !== $item ? specs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
