<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingStyleTemplateField;

use AlibabaCloud\Tea\Model;

class enums extends Model
{
    /**
     * @var string[]
     */
    public $cascadingFields;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'cascadingFields' => 'CascadingFields',
        'key' => 'Key',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cascadingFields) {
            $res['CascadingFields'] = $this->cascadingFields;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enums
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CascadingFields'])) {
            if (!empty($map['CascadingFields'])) {
                $model->cascadingFields = $map['CascadingFields'];
            }
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
