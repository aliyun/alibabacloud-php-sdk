<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCommonLogFieldsResponseBody;

use AlibabaCloud\Dara\Model;

class logFieldList extends Model
{
    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var bool
     */
    public $isRequired;

    /**
     * @var string
     */
    public $logKey;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'isDefault' => 'IsDefault',
        'isRequired' => 'IsRequired',
        'logKey' => 'LogKey',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->isRequired) {
            $res['IsRequired'] = $this->isRequired;
        }

        if (null !== $this->logKey) {
            $res['LogKey'] = $this->logKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['IsRequired'])) {
            $model->isRequired = $map['IsRequired'];
        }

        if (isset($map['LogKey'])) {
            $model->logKey = $map['LogKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
