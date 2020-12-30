<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class DeleteCommonGroupRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $commonGroupId;
    protected $_name = [
        'orgId'         => 'OrgId',
        'projectId'     => 'ProjectId',
        'commonGroupId' => 'CommonGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->commonGroupId) {
            $res['CommonGroupId'] = $this->commonGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCommonGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['CommonGroupId'])) {
            $model->commonGroupId = $map['CommonGroupId'];
        }

        return $model;
    }
}
