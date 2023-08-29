<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetLifecycleRuleRequest extends Model
{
    /**
     * @example LCRU-17E7192705C365C0
     *
     * @var string
     */
    public $bizId;

    /**
     * @example demo_catalog_id.demo_db_name.demo_table_name
     *
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'bizId'        => 'BizId',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLifecycleRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
