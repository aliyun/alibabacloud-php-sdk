<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDIJobRequest extends Model
{
    /**
     * @description The ID of the synchronization task.
     *
     * This parameter is required.
     * @example 11588
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description Specifies whether to return detailed configuration information, including TransformationRules, TableMappings, and JobSettings. Valid values: true and false. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $withDetails;
    protected $_name = [
        'DIJobId'     => 'DIJobId',
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
        if (isset($map['WithDetails'])) {
            $model->withDetails = $map['WithDetails'];
        }

        return $model;
    }
}
