<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CloneDataSourceRequest extends Model
{
    /**
     * @description The name of the destination data source The name can contain letters, digits, and underscores (_), and must start with a letter. It cannot exceed 60 characters in length.
     *
     * @example demo_holo_datasource
     *
     * @var string
     */
    public $cloneDataSourceName;

    /**
     * @description The data source ID.
     *
     * @example 16036
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'cloneDataSourceName' => 'CloneDataSourceName',
        'id'                  => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloneDataSourceName) {
            $res['CloneDataSourceName'] = $this->cloneDataSourceName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloneDataSourceName'])) {
            $model->cloneDataSourceName = $map['CloneDataSourceName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
