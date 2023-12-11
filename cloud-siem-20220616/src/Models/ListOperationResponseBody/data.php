<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListOperationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the user is an administrator. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $adminOrNot;

    /**
     * @description The resources on which the permissions are granted.
     *
     * @var string[]
     */
    public $operationList;
    protected $_name = [
        'adminOrNot'    => 'AdminOrNot',
        'operationList' => 'OperationList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminOrNot) {
            $res['AdminOrNot'] = $this->adminOrNot;
        }
        if (null !== $this->operationList) {
            $res['OperationList'] = $this->operationList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminOrNot'])) {
            $model->adminOrNot = $map['AdminOrNot'];
        }
        if (isset($map['OperationList'])) {
            if (!empty($map['OperationList'])) {
                $model->operationList = $map['OperationList'];
            }
        }

        return $model;
    }
}
