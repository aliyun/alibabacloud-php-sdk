<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackTypeListResponseBody;

use AlibabaCloud\Dara\Model;

class attackTypeList extends Model
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $statusType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
