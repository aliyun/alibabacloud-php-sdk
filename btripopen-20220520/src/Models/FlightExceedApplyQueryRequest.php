<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightExceedApplyQueryRequest extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $corpId;
    protected $_name = [
        'applyId' => 'apply_id',
        'corpId'  => 'corp_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightExceedApplyQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        return $model;
    }
}
