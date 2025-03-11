<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ModifyDrdsInstanceDescriptionRequest extends Model
{
    /**
     * @description The description of the DRDS instance.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the DRDS instance.
     *
     * This parameter is required.
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'description'    => 'Description',
        'drdsInstanceId' => 'DrdsInstanceId',
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
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDrdsInstanceDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}
