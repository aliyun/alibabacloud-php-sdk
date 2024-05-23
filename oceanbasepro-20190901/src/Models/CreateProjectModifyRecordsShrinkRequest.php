<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectModifyRecordsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $databasesShrink;

    /**
     * @description This parameter is required.
     *
     * @example np_fe****
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'databasesShrink' => 'Databases',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databasesShrink) {
            $res['Databases'] = $this->databasesShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectModifyRecordsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            $model->databasesShrink = $map['Databases'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
