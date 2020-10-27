<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\StartElasticityAssuranceRequest\privatePoolOptions;
use AlibabaCloud\Tea\Model;

class StartElasticityAssuranceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;
    protected $_name = [
        'regionId'           => 'RegionId',
        'privatePoolOptions' => 'PrivatePoolOptions',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartElasticityAssuranceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }

        return $model;
    }
}
