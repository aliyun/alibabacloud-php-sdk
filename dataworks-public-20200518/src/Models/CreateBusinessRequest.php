<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreateBusinessRequest extends Model
{
    /**
     * @var string
     */
    public $businessName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $projectIdentifier;
    /**
     * @var string
     */
    public $useType;
    protected $_name = [
        'businessName'      => 'BusinessName',
        'description'       => 'Description',
        'owner'             => 'Owner',
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'useType'           => 'UseType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
