<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrademarkDetailForInnerRequest extends Model
{
    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $umid;
    protected $_name = [
        'uid'  => 'Uid',
        'umid' => 'Umid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->umid) {
            $res['Umid'] = $this->umid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrademarkDetailForInnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Umid'])) {
            $model->umid = $map['Umid'];
        }

        return $model;
    }
}
