<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListNamespacesResponseBody\data;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @description The description of the namespace.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the namespace.
     *
     * @example doc
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace ID.
     *
     * @example 1a72ecb1-b4cc-400a-a71b-20cdec9b****
     *
     * @var string
     */
    public $UId;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'UId'         => 'UId',
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
        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaces
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
        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }

        return $model;
    }
}
