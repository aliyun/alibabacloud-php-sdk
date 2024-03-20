<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeKmsAssociateResourcesResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return associateDBInstances
     */
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
