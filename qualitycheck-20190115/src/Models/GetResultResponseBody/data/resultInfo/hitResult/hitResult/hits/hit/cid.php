<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit;

use AlibabaCloud\Tea\Model;

class cid extends Model
{
    /**
     * @var string[]
     */
    public $cid;
    protected $_name = [
        'cid' => 'Cid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cid
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cid'])) {
            if (!empty($map['Cid'])) {
                $model->cid = $map['Cid'];
            }
        }

        return $model;
    }
}
