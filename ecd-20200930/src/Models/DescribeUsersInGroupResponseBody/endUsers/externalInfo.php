<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers;

use AlibabaCloud\Tea\Model;

class externalInfo extends Model
{
    /**
     * @description The external name.
     *
     * @example nameDemo
     *
     * @var string
     */
    public $externalName;

    /**
     * @description The employee ID.
     *
     * @example 123
     *
     * @var string
     */
    public $jobNumber;
    protected $_name = [
        'externalName' => 'ExternalName',
        'jobNumber'    => 'JobNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalName) {
            $res['ExternalName'] = $this->externalName;
        }
        if (null !== $this->jobNumber) {
            $res['JobNumber'] = $this->jobNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return externalInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalName'])) {
            $model->externalName = $map['ExternalName'];
        }
        if (isset($map['JobNumber'])) {
            $model->jobNumber = $map['JobNumber'];
        }

        return $model;
    }
}
