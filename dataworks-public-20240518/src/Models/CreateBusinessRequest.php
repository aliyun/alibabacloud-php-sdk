<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateBusinessRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example My business process
     *
     * @var string
     */
    public $businessName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1000000000001
     *
     * @var string
     */
    public $owner;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'businessName' => 'BusinessName',
        'description' => 'Description',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'useType' => 'UseType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBusinessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
