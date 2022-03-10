<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateWorkspaceUsersRoleResponseBody;

use AlibabaCloud\Tea\Model;

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
        'failure'       => 'Failure',
        'failureDetail' => 'FailureDetail',
        'success'       => 'Success',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failure) {
            $res['Failure'] = $this->failure;
        }
        if (null !== $this->failureDetail) {
            $res['FailureDetail'] = $this->failureDetail;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failure'])) {
            $model->failure = $map['Failure'];
        }
        if (isset($map['FailureDetail'])) {
            $model->failureDetail = $map['FailureDetail'];
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
