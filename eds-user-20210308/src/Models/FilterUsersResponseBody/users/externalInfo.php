<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class externalInfo extends Model
{
    /**
     * @description The name of the external system account to which the user is connected.
     *
     * @example test
     *
     * @var string
     */
    public $externalName;

    /**
     * @description The student ID or employee ID of the external system account that is connected to the user.
     *
     * @example 030801
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
