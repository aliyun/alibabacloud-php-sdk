<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas\metaDataFields;

use AlibabaCloud\Tea\Model;

class operatorList extends Model
{
    /**
     * @description The description of the operator.
     *
     * @example dingtalk_vul
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the operator.
     *
     * @example regex
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operatorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
