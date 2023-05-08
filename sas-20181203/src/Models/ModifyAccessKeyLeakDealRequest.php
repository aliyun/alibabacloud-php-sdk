<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessKeyLeakDealRequest extends Model
{
    /**
     * @description The ID of the AccessKey pair leak.
     *
     * > You can call the [DescribeAccesskeyLeakList](~~DescribeAccesskeyLeakList~~) operation to query the ID. You must specify at least one of the Id and **IdList** parameters.
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The IDs of AccessKey pair leaks.
     *
     * @var int[]
     */
    public $idList;

    /**
     * @description The remarks that are added.
     *
     * @example disabled.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The method to handle the AccessKey pair leak. Valid values:
     *
     *   **manual**: manually handle
     *   **disable**: disable
     *   **add-whitelist**: add to the whitelist
     *
     * @example disable
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'     => 'Id',
        'idList' => 'IdList',
        'remark' => 'Remark',
        'type'   => 'Type',
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
        if (null !== $this->idList) {
            $res['IdList'] = $this->idList;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccessKeyLeakDealRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = $map['IdList'];
            }
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
