<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\GetModelDeploymentResourcesResponseBody\memberMatches;

use AlibabaCloud\Dara\Model;

class quotas extends Model
{
    /**
     * @var string
     */
    public $quotaId;
    protected $_name = [
        'quotaId' => 'QuotaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
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
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        return $model;
    }
}
