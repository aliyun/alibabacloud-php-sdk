<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class UpdateBizMetricShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $updateBizMetricCommandShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'updateBizMetricCommandShrink' => 'UpdateBizMetricCommand',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->updateBizMetricCommandShrink) {
            $res['UpdateBizMetricCommand'] = $this->updateBizMetricCommandShrink;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['UpdateBizMetricCommand'])) {
            $model->updateBizMetricCommandShrink = $map['UpdateBizMetricCommand'];
        }

        return $model;
    }
}
