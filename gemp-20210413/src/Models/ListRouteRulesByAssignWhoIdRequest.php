<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListRouteRulesByAssignWhoIdRequest extends Model
{
    /**
     * @var int
     */
    public $assignWhoId;

    /**
     * @var int
     */
    public $assignWhoType;
    protected $_name = [
        'assignWhoId'   => 'assignWhoId',
        'assignWhoType' => 'assignWhoType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignWhoId) {
            $res['assignWhoId'] = $this->assignWhoId;
        }
        if (null !== $this->assignWhoType) {
            $res['assignWhoType'] = $this->assignWhoType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRouteRulesByAssignWhoIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignWhoId'])) {
            $model->assignWhoId = $map['assignWhoId'];
        }
        if (isset($map['assignWhoType'])) {
            $model->assignWhoType = $map['assignWhoType'];
        }

        return $model;
    }
}
