<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataAssetTagShrinkRequest extends Model
{
    /**
     * @description The description of the tag.
     *
     * @example This is a description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The tag key.
     *
     * This parameter is required.
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag administrators.
     *
     * @var string
     */
    public $managersShrink;

    /**
     * @description The tag values.
     *
     * @var string
     */
    public $valuesShrink;
    protected $_name = [
        'description' => 'Description',
        'key' => 'Key',
        'managersShrink' => 'Managers',
        'valuesShrink' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->managersShrink) {
            $res['Managers'] = $this->managersShrink;
        }
        if (null !== $this->valuesShrink) {
            $res['Values'] = $this->valuesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataAssetTagShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Managers'])) {
            $model->managersShrink = $map['Managers'];
        }
        if (isset($map['Values'])) {
            $model->valuesShrink = $map['Values'];
        }

        return $model;
    }
}
