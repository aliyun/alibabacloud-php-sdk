<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody;

use AlibabaCloud\Tea\Model;

class progress extends Model
{
    /**
     * @description The name of the baseline item.
     *
     * @example ACS-BP_ACCOUNT_FACTORY_VPC
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of applying the account baseline to the account. Valid values:
     *
     *   Pending: The account is waiting to be created.
     *   Running: The account baseline is being applied to the account.
     *   Finished: The account baseline is applied to the account.
     *   Failed: The account baseline failed to be applied to the account.
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'name'   => 'Name',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return progress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
