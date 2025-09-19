<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckResultResponseBody;

use AlibabaCloud\Dara\Model;

class checkResultList extends Model
{
    /**
     * @var int
     */
    public $complianceStatus;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'complianceStatus' => 'ComplianceStatus',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceStatus) {
            $res['ComplianceStatus'] = $this->complianceStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ComplianceStatus'])) {
            $model->complianceStatus = $map['ComplianceStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
