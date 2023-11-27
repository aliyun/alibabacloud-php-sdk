<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\QueryInterconnectionCidMappingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1111
     *
     * @var string
     */
    public $dstCid;
    protected $_name = [
        'dstCid' => 'DstCid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstCid) {
            $res['DstCid'] = $this->dstCid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstCid'])) {
            $model->dstCid = $map['DstCid'];
        }

        return $model;
    }
}
