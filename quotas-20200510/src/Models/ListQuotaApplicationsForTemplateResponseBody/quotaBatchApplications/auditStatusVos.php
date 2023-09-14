<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsForTemplateResponseBody\quotaBatchApplications;

use AlibabaCloud\Tea\Model;

class auditStatusVos extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $count;

    /**
     * @example Agree
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'count'  => 'Count',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditStatusVos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
