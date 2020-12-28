<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetHitCountResponseBody;

use AlibabaCloud\Tea\Model;

class hits extends Model
{
    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var float
     */
    public $count;
    protected $_name = [
        'hostIp' => 'HostIp',
        'count'  => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
