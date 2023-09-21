<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class RetryInstallProbeRequest extends Model
{
    /**
     * @example c4c47cc1-f60a-4b2f-bcdb-9aed6644****
     *
     * @var string
     */
    public $probeId;
    protected $_name = [
        'probeId' => 'ProbeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetryInstallProbeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }

        return $model;
    }
}
