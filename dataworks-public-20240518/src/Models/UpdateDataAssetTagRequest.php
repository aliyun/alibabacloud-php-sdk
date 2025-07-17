<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataAssetTagRequest extends Model
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
     * @var string[]
     */
    public $managers;

    /**
     * @description The tag values.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'description' => 'Description',
        'key' => 'Key',
        'managers' => 'Managers',
        'values' => 'Values',
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
        if (null !== $this->managers) {
            $res['Managers'] = $this->managers;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataAssetTagRequest
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
            if (!empty($map['Managers'])) {
                $model->managers = $map['Managers'];
            }
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
