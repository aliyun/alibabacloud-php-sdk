<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunInstanceResponseBody\instanceList\nodeInfo;

use AlibabaCloud\Tea\Model;

class modifier extends Model
{
    /**
     * @example 1001012
     *
     * @var string
     */
    public $id;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modifier
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

        return $model;
    }
}
