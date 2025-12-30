<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class DeleteBizMetricShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deleteBizMetricCommandShrink;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'deleteBizMetricCommandShrink' => 'DeleteBizMetricCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteBizMetricCommandShrink) {
            $res['DeleteBizMetricCommand'] = $this->deleteBizMetricCommandShrink;
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
        if (isset($map['DeleteBizMetricCommand'])) {
            $model->deleteBizMetricCommandShrink = $map['DeleteBizMetricCommand'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
