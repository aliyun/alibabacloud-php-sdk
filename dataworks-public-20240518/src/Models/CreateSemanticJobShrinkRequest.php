<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateSemanticJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $referenceFileIdsShrink;

    /**
     * @var string
     */
    public $referenceFileUrisShrink;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sourceShrink;
    protected $_name = [
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'referenceFileIdsShrink' => 'ReferenceFileIds',
        'referenceFileUrisShrink' => 'ReferenceFileUris',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceShrink' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->referenceFileIdsShrink) {
            $res['ReferenceFileIds'] = $this->referenceFileIdsShrink;
        }

        if (null !== $this->referenceFileUrisShrink) {
            $res['ReferenceFileUris'] = $this->referenceFileUrisShrink;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sourceShrink) {
            $res['Source'] = $this->sourceShrink;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ReferenceFileIds'])) {
            $model->referenceFileIdsShrink = $map['ReferenceFileIds'];
        }

        if (isset($map['ReferenceFileUris'])) {
            $model->referenceFileUrisShrink = $map['ReferenceFileUris'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Source'])) {
            $model->sourceShrink = $map['Source'];
        }

        return $model;
    }
}
