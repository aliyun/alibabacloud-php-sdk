<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteVmRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $workloadUuid;
    protected $_name = [
        'aliUid'       => 'AliUid',
        'workloadUuid' => 'WorkloadUuid',
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
        if (null !== $this->workloadUuid) {
            $res['WorkloadUuid'] = $this->workloadUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['WorkloadUuid'])) {
            $model->workloadUuid = $map['WorkloadUuid'];
        }

        return $model;
    }
}
