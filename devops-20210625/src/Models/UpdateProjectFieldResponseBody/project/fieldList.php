<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldResponseBody\project;

use AlibabaCloud\Tea\Model;

class fieldList extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @example b787ff504c0b36f8b71d15a4fd
     *
     * @var string
     */
    public $identifier;

    /**
     * @example ace3wxxxxxxx7rff3ee
     *
     * @var string
     */
    public $value;

    /**
     * @example user
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'displayName' => 'displayName',
        'identifier'  => 'identifier',
        'value'       => 'value',
        'valueType'   => 'valueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['valueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fieldList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueType'])) {
            $model->valueType = $map['valueType'];
        }

        return $model;
    }
}
