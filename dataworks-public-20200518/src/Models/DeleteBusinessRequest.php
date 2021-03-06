<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteBusinessRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var int
     */
    public $businessId;
    protected $_name = [
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'businessId'        => 'BusinessId',
    ];

    public function validate()
    {
        Model::validateRequired('businessId', $this->businessId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBusinessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        return $model;
    }
}
