<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOpEntitiesResponseBody;

use AlibabaCloud\Tea\Model;

class opEntities extends Model
{
    /**
     * @description The operation object, which is the ID of the instance.
     *
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $entityObject;

    /**
     * @description The type of the operation object. The value is fixed as **1**, which indicates Anti-DDoS Origin instances.
     *
     * @example 1
     *
     * @var int
     */
    public $entityType;

    /**
     * @description The time when the log was generated. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1635818114000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The ID of the Alibaba Cloud account that performs the operation.
     *
     * > If the value is **system**, the operation is performed by Anti-DDoS Origin.
     * @example 171986973287****
     *
     * @var string
     */
    public $opAccount;

    /**
     * @description The type of operation. Valid values:
     *
     *   **3**: indicates an operation to add an IP address to the Anti-DDoS Origin instance for protection.
     *   **4**: indicates an operation to remove a protected IP address from the Anti-DDoS Origin instance.
     *   **5**: indicates an operation to downgrade the Anti-DDoS Origin instance.
     *   **6**: indicates an operation to deactivate blackhole filtering for an IP address.
     *   **7**: indicates an operation to reset the number of times that you can deactivate blackhole filtering.
     *   **8**: indicates an operation to enable burstable protection.
     *
     * @example 8
     *
     * @var int
     */
    public $opAction;

    /**
     * @description The details of the operation. The value is a string that consists of a JSON struct. The JSON struct contains the following fields:
     *
     *   **entity**: the operation object. Data type: object. The fields that are included in the value of the **entity** parameter vary based on the value of the **OpAction** parameter. Valid values:
     *
     *   If the value of the **OpAction** parameter is **3**, the value of the **entity** parameter consists of the following field:
     *
     *   **ips**: the public IP addresses that are protected by the Anti-DDoS Origin instance. Data type: array
     *
     *   If the value of the **OpAction** parameter is **4**, the value of the **entity** parameter consists of the following field:
     *
     *   **ips**: the public IP addresses that are no longer protected by the Anti-DDoS Origin instance. Data type: array.
     *
     *   If the value of the **OpAction** parameter is **5**, the value of the **entity** parameter consists of the following fields:
     *
     *   **baseBandwidth**: the basic protection bandwidth. Unit: Gbit/s. Data type: integer.
     *   **elasticBandwidth**: the burstable protection bandwidth. Unit: Gbit/s. Data type: integer.
     *   **opSource**: the source of the operation. The value is fixed as **1**, indicating that the operation is performed by Anti-DDoS Origin. Data type: integer.
     *
     *   If the value of the **OpAction** parameter is **6**, the value of the **entity** parameter consists of the following field:
     *
     *   **ips**: the public IP addresses for which to deactivate blackhole filtering. Data type: array.
     *
     *   If the value of the **OpAction** parameter is **7**, the **entity** parameter is not returned.
     *
     *   If the value of the **OpAction** parameter is **8**, the value of the **entity** parameter consists of the following fields:
     *
     *   **baseBandwidth**: the basic protection bandwidth. Unit: Gbit/s. Data type: integer.
     *   **elasticBandwidth**: the burstable protection bandwidth. Unit: Gbit/s. Data type: integer.
     *
     * @example {"entity":{"baseBandwidth":20,"elasticBandwidth":20}}
     *
     * @var string
     */
    public $opDesc;
    protected $_name = [
        'entityObject' => 'EntityObject',
        'entityType'   => 'EntityType',
        'gmtCreate'    => 'GmtCreate',
        'opAccount'    => 'OpAccount',
        'opAction'     => 'OpAction',
        'opDesc'       => 'OpDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityObject) {
            $res['EntityObject'] = $this->entityObject;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->opAccount) {
            $res['OpAccount'] = $this->opAccount;
        }
        if (null !== $this->opAction) {
            $res['OpAction'] = $this->opAction;
        }
        if (null !== $this->opDesc) {
            $res['OpDesc'] = $this->opDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return opEntities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityObject'])) {
            $model->entityObject = $map['EntityObject'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['OpAccount'])) {
            $model->opAccount = $map['OpAccount'];
        }
        if (isset($map['OpAction'])) {
            $model->opAction = $map['OpAction'];
        }
        if (isset($map['OpDesc'])) {
            $model->opDesc = $map['OpDesc'];
        }

        return $model;
    }
}
