<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteOssScanConfigRequest extends Model
{
    /**
     * @description The configuration ID.
     *
     * >  You can call the [ListOssScanConfig](~~ListOssScanConfig~~) operation to query configuration IDs.
     * @example 1589
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOssScanConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
