<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasResponseBody\quotas\specs;

class quotas extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var specs[]
     */
    public $specs;
    protected $_name = [
        'displayName' => 'DisplayName',
        'id' => 'Id',
        'mode' => 'Mode',
        'name' => 'Name',
        'productCode' => 'ProductCode',
        'quotaType' => 'QuotaType',
        'specs' => 'Specs',
    ];

    public function validate()
    {
        if (\is_array($this->specs)) {
            Model::validateArray($this->specs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->specs)) {
                $res['Specs'] = [];
                $n1 = 0;
                foreach ($this->specs as $item1) {
                    $res['Specs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Specs'] as $item1) {
                    $model->specs[$n1++] = specs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
