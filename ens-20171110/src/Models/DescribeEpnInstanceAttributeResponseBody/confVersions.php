<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class confVersions extends Model
{
    /**
     * @var string
     */
    public $confVersion;

    /**
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'confVersion' => 'ConfVersion',
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confVersion) {
            $res['ConfVersion'] = $this->confVersion;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfVersion'])) {
            $model->confVersion = $map['ConfVersion'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
