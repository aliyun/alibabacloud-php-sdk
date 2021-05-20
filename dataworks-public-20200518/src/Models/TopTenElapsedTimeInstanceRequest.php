<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class TopTenElapsedTimeInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $businessDate;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'businessDate' => 'BusinessDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->businessDate) {
            $res['BusinessDate'] = $this->businessDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TopTenElapsedTimeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['BusinessDate'])) {
            $model->businessDate = $map['BusinessDate'];
        }

        return $model;
    }
}
