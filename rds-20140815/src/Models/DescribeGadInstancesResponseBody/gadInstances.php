<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody\gadInstances\gadInstanceMembers;
use AlibabaCloud\Tea\Model;

class gadInstances extends Model
{
    /**
     * @description The time when the global active database cluster was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-10-21T02:57:08Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The name of the cluster.
     *
     * @example GadTest
     *
     * @var string
     */
    public $description;

    /**
     * @description The information about each node in the cluster.
     *
     * @var gadInstanceMembers[]
     */
    public $gadInstanceMembers;

    /**
     * @description The ID of the global active database cluster.
     *
     * @example gad-rm-bp1npi2j8********
     *
     * @var string
     */
    public $gadInstanceName;

    /**
     * @description The time when the most recent modification was made to the global active database cluster. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-10-21T03:01:20Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The database engine that is run by the global active database cluster.
     *
     * >  The value of this parameter is fixed as **mysql**.
     * @example mysql
     *
     * @var string
     */
    public $service;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   **activation**: The cluster is running.
     *   **creating**: The cluster is being created.
     *   **replica_adding**: Nodes are being added to the cluster.
     *
     * @example activation
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'description'        => 'Description',
        'gadInstanceMembers' => 'GadInstanceMembers',
        'gadInstanceName'    => 'GadInstanceName',
        'modificationTime'   => 'ModificationTime',
        'service'            => 'Service',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gadInstanceMembers) {
            $res['GadInstanceMembers'] = [];
            if (null !== $this->gadInstanceMembers && \is_array($this->gadInstanceMembers)) {
                $n = 0;
                foreach ($this->gadInstanceMembers as $item) {
                    $res['GadInstanceMembers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gadInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GadInstanceMembers'])) {
            if (!empty($map['GadInstanceMembers'])) {
                $model->gadInstanceMembers = [];
                $n                         = 0;
                foreach ($map['GadInstanceMembers'] as $item) {
                    $model->gadInstanceMembers[$n++] = null !== $item ? gadInstanceMembers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
