<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomAttributeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $displayEnabled;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $entityTypesShrink;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $searchFilterEnabled;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $valueEnumsShrink;
    protected $_name = [
        'comment' => 'Comment',
        'displayEnabled' => 'DisplayEnabled',
        'displayName' => 'DisplayName',
        'entityTypesShrink' => 'EntityTypes',
        'id' => 'Id',
        'searchFilterEnabled' => 'SearchFilterEnabled',
        'type' => 'Type',
        'valueEnumsShrink' => 'ValueEnums',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->displayEnabled) {
            $res['DisplayEnabled'] = $this->displayEnabled;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->entityTypesShrink) {
            $res['EntityTypes'] = $this->entityTypesShrink;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->searchFilterEnabled) {
            $res['SearchFilterEnabled'] = $this->searchFilterEnabled;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->valueEnumsShrink) {
            $res['ValueEnums'] = $this->valueEnumsShrink;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DisplayEnabled'])) {
            $model->displayEnabled = $map['DisplayEnabled'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EntityTypes'])) {
            $model->entityTypesShrink = $map['EntityTypes'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SearchFilterEnabled'])) {
            $model->searchFilterEnabled = $map['SearchFilterEnabled'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ValueEnums'])) {
            $model->valueEnumsShrink = $map['ValueEnums'];
        }

        return $model;
    }
}
