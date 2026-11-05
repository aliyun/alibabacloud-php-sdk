<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationAssignmentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationAssignmentsResponseBody\applicationAssignment\applicationAssignmentInfo;

class applicationAssignment extends Model
{
    /**
     * @var applicationAssignmentInfo[]
     */
    public $applicationAssignmentInfo;
    protected $_name = [
        'applicationAssignmentInfo' => 'ApplicationAssignmentInfo',
    ];

    public function validate()
    {
        if (\is_array($this->applicationAssignmentInfo)) {
            Model::validateArray($this->applicationAssignmentInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationAssignmentInfo) {
            if (\is_array($this->applicationAssignmentInfo)) {
                $res['ApplicationAssignmentInfo'] = [];
                $n1 = 0;
                foreach ($this->applicationAssignmentInfo as $item1) {
                    $res['ApplicationAssignmentInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationAssignmentInfo'])) {
            if (!empty($map['ApplicationAssignmentInfo'])) {
                $model->applicationAssignmentInfo = [];
                $n1 = 0;
                foreach ($map['ApplicationAssignmentInfo'] as $item1) {
                    $model->applicationAssignmentInfo[$n1] = applicationAssignmentInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
