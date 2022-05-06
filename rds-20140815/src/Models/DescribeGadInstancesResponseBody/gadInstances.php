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
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var gadInstanceMembers[]
     */
    public $gadInstanceMembers;

    /**
     * @var string
     */
    public $gadInstanceName;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $service;

    /**
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
