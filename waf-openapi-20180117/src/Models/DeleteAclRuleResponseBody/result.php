<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DeleteAclRuleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $wafTaskId;
    protected $_name = [
        'status'    => 'Status',
        'wafTaskId' => 'WafTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wafTaskId) {
            $res['WafTaskId'] = $this->wafTaskId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WafTaskId'])) {
            $model->wafTaskId = $map['WafTaskId'];
        }

        return $model;
    }
}
