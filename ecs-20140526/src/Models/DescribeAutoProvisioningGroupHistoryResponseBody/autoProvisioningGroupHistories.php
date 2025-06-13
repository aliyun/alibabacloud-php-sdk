<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory;

class autoProvisioningGroupHistories extends Model
{
    /**
     * @var autoProvisioningGroupHistory[]
     */
    public $autoProvisioningGroupHistory;
    protected $_name = [
        'autoProvisioningGroupHistory' => 'AutoProvisioningGroupHistory',
    ];

    public function validate()
    {
        if (\is_array($this->autoProvisioningGroupHistory)) {
            Model::validateArray($this->autoProvisioningGroupHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupHistory) {
            if (\is_array($this->autoProvisioningGroupHistory)) {
                $res['AutoProvisioningGroupHistory'] = [];
                $n1 = 0;
                foreach ($this->autoProvisioningGroupHistory as $item1) {
                    $res['AutoProvisioningGroupHistory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AutoProvisioningGroupHistory'])) {
            if (!empty($map['AutoProvisioningGroupHistory'])) {
                $model->autoProvisioningGroupHistory = [];
                $n1 = 0;
                foreach ($map['AutoProvisioningGroupHistory'] as $item1) {
                    $model->autoProvisioningGroupHistory[$n1] = autoProvisioningGroupHistory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
