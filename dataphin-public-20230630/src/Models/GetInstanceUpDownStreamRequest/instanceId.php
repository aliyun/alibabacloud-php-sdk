<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamRequest;

use AlibabaCloud\Tea\Model;

class instanceId extends Model
{
    /**
     * @var string[]
     */
    public $fieldInstanceIdList;

    /**
     * @description This parameter is required.
     *
     * @example t_123456
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'fieldInstanceIdList' => 'FieldInstanceIdList',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldInstanceIdList) {
            $res['FieldInstanceIdList'] = $this->fieldInstanceIdList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldInstanceIdList'])) {
            if (!empty($map['FieldInstanceIdList'])) {
                $model->fieldInstanceIdList = $map['FieldInstanceIdList'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
