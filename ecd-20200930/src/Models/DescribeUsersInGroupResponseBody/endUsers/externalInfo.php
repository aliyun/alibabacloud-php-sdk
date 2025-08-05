<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers;

use AlibabaCloud\Dara\Model;

class externalInfo extends Model
{
    /**
     * @var string
     */
    public $externalName;

    /**
     * @var string
     */
    public $jobNumber;
    protected $_name = [
        'externalName' => 'ExternalName',
        'jobNumber' => 'JobNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
