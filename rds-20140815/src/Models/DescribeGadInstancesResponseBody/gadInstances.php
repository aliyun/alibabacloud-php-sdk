<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody\gadInstances\gadInstanceMembers;
use AlibabaCloud\Tea\Model;

class gadInstances extends Model
{
    /**
     * @var string
     */
    public $gadInstanceName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var gadInstanceMembers[]
     */
    public $gadInstanceMembers;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'gadInstanceName'    => 'GadInstanceName',
        'description'        => 'Description',
        'status'             => 'Status',
        'creationTime'       => 'CreationTime',
        'modificationTime'   => 'ModificationTime',
        'gadInstanceMembers' => 'GadInstanceMembers',
        'service'            => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
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
        if (null !== $this->service) {
            $res['Service'] = $this->service;
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
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
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
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
