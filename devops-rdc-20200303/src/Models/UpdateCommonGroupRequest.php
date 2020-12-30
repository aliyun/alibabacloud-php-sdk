<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class UpdateCommonGroupRequest extends Model
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
    public $description;

    /**
     * @var string
     */
    public $smartGroupId;

    /**
     * @var string
     */
    public $commonGroupId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'orgId'         => 'OrgId',
        'projectId'     => 'ProjectId',
        'description'   => 'Description',
        'smartGroupId'  => 'SmartGroupId',
        'commonGroupId' => 'CommonGroupId',
        'name'          => 'Name',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->smartGroupId) {
            $res['SmartGroupId'] = $this->smartGroupId;
        }
        if (null !== $this->commonGroupId) {
            $res['CommonGroupId'] = $this->commonGroupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCommonGroupRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SmartGroupId'])) {
            $model->smartGroupId = $map['SmartGroupId'];
        }
        if (isset($map['CommonGroupId'])) {
            $model->commonGroupId = $map['CommonGroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
