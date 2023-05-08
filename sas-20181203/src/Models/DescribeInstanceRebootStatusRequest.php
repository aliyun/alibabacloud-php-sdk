<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceRebootStatusRequest extends Model
{
    /**
     * @description Queries the status of the servers that you restart.
     *
     * @example d77f7802-4f0a-4221-ab02-4d999e****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceRebootStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
