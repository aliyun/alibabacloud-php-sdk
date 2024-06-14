<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;

use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @example phoneNumber
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string[]
     */
    public $enums;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'code'  => 'Code',
        'desc'  => 'Desc',
        'enums' => 'Enums',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->enums) {
            $res['Enums'] = $this->enums;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Enums'])) {
            if (!empty($map['Enums'])) {
                $model->enums = $map['Enums'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
