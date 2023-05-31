<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class VerifyCheckInstanceResultRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * > You can call the [ListCheckResult](~~ListCheckResult~~) operation to query the IDs of check items.
     * @example 16
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The instance IDs of the assets on which risks are detected based on the check item.
     *
     * @var string[]
     */
    public $instanceIds;
    protected $_name = [
        'checkId'     => 'CheckId',
        'instanceIds' => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCheckInstanceResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }

        return $model;
    }
}
