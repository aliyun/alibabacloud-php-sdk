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
    public $resourceAttribute;

    /**
     * @var string
     */
    public $groupUuid;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'resourceAttribute' => 'ResourceAttribute',
        'groupUuid'         => 'GroupUuid',
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
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
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
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }

        return $model;
    }
}
