<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeKmsAssociateResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class associateDBInstances extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $keyUsedBy;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'engine'         => 'Engine',
        'keyUsedBy'      => 'KeyUsedBy',
        'status'         => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->keyUsedBy) {
            $res['KeyUsedBy'] = $this->keyUsedBy;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['KeyUsedBy'])) {
            $model->keyUsedBy = $map['KeyUsedBy'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
