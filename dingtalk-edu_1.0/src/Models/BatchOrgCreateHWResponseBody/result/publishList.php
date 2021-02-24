<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchOrgCreateHWResponseBody\result;

use AlibabaCloud\Tea\Model;

class publishList extends Model
{
    /**
     * @var string
     */
    public $corpid;

    /**
     * @var float
     */
    public $hwid;
    protected $_name = [
        'corpid' => 'corpid',
        'hwid'   => 'hwid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->hwid) {
            $res['hwid'] = $this->hwid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corpid'])) {
            $model->corpid = $map['corpid'];
        }
        if (isset($map['hwid'])) {
            $model->hwid = $map['hwid'];
        }

        return $model;
    }
}
