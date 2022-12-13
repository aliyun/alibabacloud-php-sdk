<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesByAssignWhoIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $tenantRamId;
    protected $_name = [
        'id'          => 'id',
        'ruleName'    => 'ruleName',
        'tenantRamId' => 'tenantRamId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }
        if (null !== $this->tenantRamId) {
            $res['tenantRamId'] = $this->tenantRamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['tenantRamId'])) {
            $model->tenantRamId = $map['tenantRamId'];
        }

        return $model;
    }
}
