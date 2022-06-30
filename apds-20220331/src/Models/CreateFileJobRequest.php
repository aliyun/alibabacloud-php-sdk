<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class CreateFileJobRequest extends Model
{
    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $surveyJobId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'resourceType' => 'resourceType',
        'surveyJobId'  => 'surveyJobId',
        'regionId'     => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->surveyJobId) {
            $res['surveyJobId'] = $this->surveyJobId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['surveyJobId'])) {
            $model->surveyJobId = $map['surveyJobId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
