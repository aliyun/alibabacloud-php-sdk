<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class GetAuditUserConfResponseBody extends Model
{
    /**
     * @var bool
     */
    public $customAudit;

    /**
     * @var string[][]
     */
    public $rcpLabels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[][]
     */
    public $userLabels;
    protected $_name = [
        'customAudit' => 'CustomAudit',
        'rcpLabels'   => 'RcpLabels',
        'requestId'   => 'RequestId',
        'userLabels'  => 'UserLabels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customAudit) {
            $res['CustomAudit'] = $this->customAudit;
        }
        if (null !== $this->rcpLabels) {
            $res['RcpLabels'] = $this->rcpLabels;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userLabels) {
            $res['UserLabels'] = $this->userLabels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditUserConfResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomAudit'])) {
            $model->customAudit = $map['CustomAudit'];
        }
        if (isset($map['RcpLabels'])) {
            $model->rcpLabels = $map['RcpLabels'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserLabels'])) {
            $model->userLabels = $map['UserLabels'];
        }

        return $model;
    }
}
