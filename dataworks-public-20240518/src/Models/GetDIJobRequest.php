<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetDIJobRequest extends Model
{
    /**
     * @example 11588
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @example true
     *
     * @var bool
     */
    public $withDetails;
    protected $_name = [
        'DIJobId'     => 'DIJobId',
        'projectId'   => 'ProjectId',
        'withDetails' => 'WithDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->withDetails) {
            $res['WithDetails'] = $this->withDetails;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['WithDetails'])) {
            $model->withDetails = $map['WithDetails'];
        }

        return $model;
    }
}
