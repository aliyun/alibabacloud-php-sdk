<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaCollectionShrinkRequest extends Model
{
    /**
     * @description The collection administrator IDs. This parameter is available only for data albums. The administrator must be an account within the same tenant.
     *
     * @var string
     */
    public $administratorsShrink;

    /**
     * @example new comment
     *
     * @var string
     */
    public $description;

    /**
     * @description The collection ID.
     *
     * This parameter is required.
     *
     * @example category.123
     *
     * @var string
     */
    public $id;

    /**
     * @example new_name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'administratorsShrink' => 'Administrators',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->administratorsShrink) {
            $res['Administrators'] = $this->administratorsShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetaCollectionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Administrators'])) {
            $model->administratorsShrink = $map['Administrators'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
