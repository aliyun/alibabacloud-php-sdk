<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeKmsAssociateResourcesResponseBody\associateDBInstances;

class DescribeKmsAssociateResourcesResponseBody extends Model
{
    /**
     * @var associateDBInstances[]
     */
    public $associateDBInstances;

    /**
     * @var bool
     */
    public $associateStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'associateDBInstances' => 'AssociateDBInstances',
        'associateStatus' => 'AssociateStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->associateDBInstances)) {
            Model::validateArray($this->associateDBInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associateDBInstances) {
            if (\is_array($this->associateDBInstances)) {
                $res['AssociateDBInstances'] = [];
                $n1 = 0;
                foreach ($this->associateDBInstances as $item1) {
                    $res['AssociateDBInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->associateStatus) {
            $res['AssociateStatus'] = $this->associateStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AssociateDBInstances'])) {
            if (!empty($map['AssociateDBInstances'])) {
                $model->associateDBInstances = [];
                $n1 = 0;
                foreach ($map['AssociateDBInstances'] as $item1) {
                    $model->associateDBInstances[$n1] = associateDBInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AssociateStatus'])) {
            $model->associateStatus = $map['AssociateStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
