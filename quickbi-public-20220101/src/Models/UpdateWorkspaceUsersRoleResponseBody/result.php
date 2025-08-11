<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateWorkspaceUsersRoleResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $failure;

    /**
     * @var mixed[]
     */
    public $failureDetail;

    /**
     * @var int
     */
    public $success;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'failure' => 'Failure',
        'failureDetail' => 'FailureDetail',
        'success' => 'Success',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->failureDetail)) {
            Model::validateArray($this->failureDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failure) {
            $res['Failure'] = $this->failure;
        }

        if (null !== $this->failureDetail) {
            if (\is_array($this->failureDetail)) {
                $res['FailureDetail'] = [];
                foreach ($this->failureDetail as $key1 => $value1) {
                    $res['FailureDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Failure'])) {
            $model->failure = $map['Failure'];
        }

        if (isset($map['FailureDetail'])) {
            if (!empty($map['FailureDetail'])) {
                $model->failureDetail = [];
                foreach ($map['FailureDetail'] as $key1 => $value1) {
                    $model->failureDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
