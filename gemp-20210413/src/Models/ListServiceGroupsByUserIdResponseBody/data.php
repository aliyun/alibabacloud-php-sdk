<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupsByUserIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isScheduled;

    /**
     * @var int
     */
    public $serviceGroupId;

    /**
     * @var string
     */
    public $serviceGroupName;
    protected $_name = [
        'isScheduled'      => 'isScheduled',
        'serviceGroupId'   => 'serviceGroupId',
        'serviceGroupName' => 'serviceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isScheduled) {
            $res['isScheduled'] = $this->isScheduled;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
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
        if (isset($map['isScheduled'])) {
            $model->isScheduled = $map['isScheduled'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }

        return $model;
    }
}
