<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateSDGRequest extends Model
{
    /**
     * @description The description of the SDG.
     *
     * >  We recommend that you specify this parameter in details for subsequent queries.
     * @var string
     */
    public $description;

    /**
     * @description The ID of the SDG from which you want to create an SDG.
     *
     * >
     *
     *   The first time you create an SDG, the **FromSDGId** parameter is empty.
     *
     *   If the value of the **FromSDGId** parameter is invalid or does not correspond to an original disk, an error is reported.
     *   If the value of the **FromSDGId** parameter is not empty, you have created an SDG, and the operation is performed on the existing SDG.
     *
     * @example sdg-xxxxx
     *
     * @var string
     */
    public $fromSDGId;

    /**
     * @description The ID of the device.
     *
     * This parameter is required.
     * @example aic-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum capacity of the SDG. Unit: GB.
     *
     * >
     *
     *   To save costs, we recommend that you specify this parameter based on your business requirements.
     *
     *   The first time that you create an SDG, the **Size** parameter is required.
     *
     *   When the amount of data increases, you can pass a new **Size** parameter for resizing.
     *
     *   If the value of the **Size** parameter is not empty and is greater than the value of the **Size** parameter of the original SDG, the original disk corresponding to the SDG is scaled out to the size that is specified by the current **Size** parameter.
     *   If the value of the **Size** parameter is not empty, or the value of the **Size** parameter is smaller than the value of the **Size** parameter of the original SDG, no operation is performed.
     *
     * @example 20
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'description' => 'Description',
        'fromSDGId'   => 'FromSDGId',
        'instanceId'  => 'InstanceId',
        'size'        => 'Size',
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
        if (null !== $this->fromSDGId) {
            $res['FromSDGId'] = $this->fromSDGId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSDGRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FromSDGId'])) {
            $model->fromSDGId = $map['FromSDGId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
