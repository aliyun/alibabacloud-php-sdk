<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody\gadInstances\gadInstanceMembers;

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
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'gadInstanceMembers' => 'GadInstanceMembers',
        'gadInstanceName' => 'GadInstanceName',
        'modificationTime' => 'ModificationTime',
        'service' => 'Service',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->gadInstanceMembers)) {
            Model::validateArray($this->gadInstanceMembers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gadInstanceMembers) {
            if (\is_array($this->gadInstanceMembers)) {
                $res['GadInstanceMembers'] = [];
                $n1 = 0;
                foreach ($this->gadInstanceMembers as $item1) {
                    $res['GadInstanceMembers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['GadInstanceMembers'] as $item1) {
                    $model->gadInstanceMembers[$n1++] = gadInstanceMembers::fromMap($item1);
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
