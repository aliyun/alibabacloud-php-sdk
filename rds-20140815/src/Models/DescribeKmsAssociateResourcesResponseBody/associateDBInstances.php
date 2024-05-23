<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeKmsAssociateResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class associateDBInstances extends Model
{
    /**
     * @description The instance ID.
     *
     * @example pgm-bp16p6f68130****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *   **PostgreSQL**
     *
     * @example PostgreSQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The purpose of the key. Valid values:
     *
     *   **DiskEncryption**: cloud disk encryption
     *   **TDE**: transparent data encryption
     *
     * @example DiskEncryption
     *
     * @var string
     */
    public $keyUsedBy;

    /**
     * @description The state of the instance. Valid values:
     *
     *   **CREATING**: The instance is being created.
     *   **ACTIVATION**: The instance is running.
     *   **DELETING**: The instance is being deleted.
     *   **RESTARTING**: The instance is being restarted.
     *   **INS_MAINTAINING**: The configuration of the instance is being changed.
     *   **INS_MAINTAINING**: The instance is being maintained.
     *   **BACKUP_RECOVERING**: The instance is being restored.
     *   **NET_MODIFYING**: The network type of the instance is being changed.
     *
     * @example ACTIVATION
     *
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
