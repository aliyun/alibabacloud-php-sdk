<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CheckQuotaRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var string
     */
    public $resourceAttribute;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'groupUuid'         => 'GroupUuid',
        'resourceAttribute' => 'ResourceAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }

        return $model;
    }
}
