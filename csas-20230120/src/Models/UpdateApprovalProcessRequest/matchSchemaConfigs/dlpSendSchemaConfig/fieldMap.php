<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\dlpSendSchemaConfig;

use AlibabaCloud\Dara\Model;

class fieldMap extends Model
{
    /**
     * @var string
     */
    public $displayField;

    /**
     * @var string
     */
    public $displayFieldValue;

    /**
     * @var string
     */
    public $systemField;
    protected $_name = [
        'displayField' => 'DisplayField',
        'displayFieldValue' => 'DisplayFieldValue',
        'systemField' => 'SystemField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayField) {
            $res['DisplayField'] = $this->displayField;
        }

        if (null !== $this->displayFieldValue) {
            $res['DisplayFieldValue'] = $this->displayFieldValue;
        }

        if (null !== $this->systemField) {
            $res['SystemField'] = $this->systemField;
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
        if (isset($map['DisplayField'])) {
            $model->displayField = $map['DisplayField'];
        }

        if (isset($map['DisplayFieldValue'])) {
            $model->displayFieldValue = $map['DisplayFieldValue'];
        }

        if (isset($map['SystemField'])) {
            $model->systemField = $map['SystemField'];
        }

        return $model;
    }
}
