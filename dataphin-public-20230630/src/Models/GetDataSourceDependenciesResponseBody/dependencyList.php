<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataSourceDependenciesResponseBody;

use AlibabaCloud\Tea\Model;

class dependencyList extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example jytest
     *
     * @var string
     */
    public $name;

    /**
     * @example pipeline
     *
     * @var string
     */
    public $type;

    /**
     * @example pipeline
     *
     * @var string
     */
    public $typeCode;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'type' => 'Type',
        'typeCode' => 'TypeCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }

        return $model;
    }
}
