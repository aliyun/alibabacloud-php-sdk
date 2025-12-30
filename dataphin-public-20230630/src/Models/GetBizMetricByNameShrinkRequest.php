<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetBizMetricByNameShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizMetricByNameQueryShrink;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'bizMetricByNameQueryShrink' => 'BizMetricByNameQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizMetricByNameQueryShrink) {
            $res['BizMetricByNameQuery'] = $this->bizMetricByNameQueryShrink;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
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
        if (isset($map['BizMetricByNameQuery'])) {
            $model->bizMetricByNameQueryShrink = $map['BizMetricByNameQuery'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
