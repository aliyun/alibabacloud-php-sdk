<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackTypeListResponseBody;

use AlibabaCloud\Tea\Model;

class attackTypeList extends Model
{
    /**
     * @example sas.attack.type.type12
     *
     * @var string
     */
    public $label;

    /**
     * @example alinet
     *
     * @var string
     */
    public $statusType;

    /**
     * @example upload
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'label'      => 'Label',
        'statusType' => 'Status_Type',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->statusType) {
            $res['Status_Type'] = $this->statusType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Status_Type'])) {
            $model->statusType = $map['Status_Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
