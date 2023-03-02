<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBusinessResponseBody\data;

use AlibabaCloud\Tea\Model;

class business extends Model
{
    /**
     * @description The ID of the workflow.
     *
     * @example 3000001
     *
     * @var int
     */
    public $businessId;

    /**
     * @description The name of the workflow.
     *
     * @example My first workflow
     *
     * @var string
     */
    public $businessName;

    /**
     * @description The description of the workflow.
     *
     * @example My first workflow
     *
     * @var string
     */
    public $description;

    /**
     * @description The owner of the workflow.
     *
     * @example 34824327****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the workspace to which the workflow belongs.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The module to which the workflow belongs. Valid values: NORMAL and MANUAL_BIZ. The value NORMAL indicates that the workflow belongs to auto triggered workflows. The value MANUAL_BIZ indicates that the workflow belongs to manually triggered workflows.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'businessId'   => 'BusinessId',
        'businessName' => 'BusinessName',
        'description'  => 'Description',
        'owner'        => 'Owner',
        'projectId'    => 'ProjectId',
        'useType'      => 'UseType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return business
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
