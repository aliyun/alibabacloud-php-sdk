<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetDingtalkProjectionListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectorWorkNo;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'code' => 'code',
        'currentPage' => 'currentPage',
        'orgId' => 'orgId',
        'pageSize' => 'pageSize',
        'projectorWorkNo' => 'projectorWorkNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->projectorWorkNo) {
            $res['projectorWorkNo'] = $this->projectorWorkNo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['projectorWorkNo'])) {
            $model->projectorWorkNo = $map['projectorWorkNo'];
        }

        return $model;
    }
}
