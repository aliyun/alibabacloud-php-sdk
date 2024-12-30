<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetLatestSubmitDetailShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $submitDetailQueryShrink;
    protected $_name = [
        'opTenantId'              => 'OpTenantId',
        'submitDetailQueryShrink' => 'SubmitDetailQuery',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->submitDetailQueryShrink) {
            $res['SubmitDetailQuery'] = $this->submitDetailQueryShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLatestSubmitDetailShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['SubmitDetailQuery'])) {
            $model->submitDetailQueryShrink = $map['SubmitDetailQuery'];
        }

        return $model;
    }
}
