<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetProjectOptionResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scopeName;

    /**
     * @var string
     */
    public $kind;
    protected $_name = [
        'value'     => 'Value',
        'name'      => 'Name',
        'scopeName' => 'ScopeName',
        'kind'      => 'Kind',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scopeName) {
            $res['ScopeName'] = $this->scopeName;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScopeName'])) {
            $model->scopeName = $map['ScopeName'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        return $model;
    }
}
