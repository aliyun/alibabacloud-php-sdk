<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class GetProjectMembersRequest extends Model
{
    /**
     * @var string
     */
    public $corpIdentifier;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $staffId;
    protected $_name = [
        'corpIdentifier' => 'CorpIdentifier',
        'projectId'      => 'ProjectId',
        'staffId'        => 'StaffId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->staffId) {
            $res['StaffId'] = $this->staffId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StaffId'])) {
            $model->staffId = $map['StaffId'];
        }

        return $model;
    }
}
