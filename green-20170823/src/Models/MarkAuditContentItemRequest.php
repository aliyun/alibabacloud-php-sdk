<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class MarkAuditContentItemRequest extends Model
{
    /**
     * @var string
     */
    public $auditIllegalReasons;

    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $bizTypes;

    /**
     * @var string
     */
    public $ids;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'auditIllegalReasons' => 'AuditIllegalReasons',
        'auditResult'         => 'AuditResult',
        'bizTypes'            => 'BizTypes',
        'ids'                 => 'Ids',
        'lang'                => 'Lang',
        'sourceIp'            => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditIllegalReasons) {
            $res['AuditIllegalReasons'] = $this->auditIllegalReasons;
        }
        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }
        if (null !== $this->bizTypes) {
            $res['BizTypes'] = $this->bizTypes;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MarkAuditContentItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditIllegalReasons'])) {
            $model->auditIllegalReasons = $map['AuditIllegalReasons'];
        }
        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }
        if (isset($map['BizTypes'])) {
            $model->bizTypes = $map['BizTypes'];
        }
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
