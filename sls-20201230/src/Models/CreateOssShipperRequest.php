<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssShipperRequest\targetConfiguration;
use AlibabaCloud\Tea\Model;

class CreateOssShipperRequest extends Model
{
    /**
     * @var string
     */
    public $shipperName;

    /**
     * @var targetConfiguration
     */
    public $targetConfiguration;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'shipperName'         => 'shipperName',
        'targetConfiguration' => 'targetConfiguration',
        'targetType'          => 'targetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shipperName) {
            $res['shipperName'] = $this->shipperName;
        }
        if (null !== $this->targetConfiguration) {
            $res['targetConfiguration'] = null !== $this->targetConfiguration ? $this->targetConfiguration->toMap() : null;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOssShipperRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['shipperName'])) {
            $model->shipperName = $map['shipperName'];
        }
        if (isset($map['targetConfiguration'])) {
            $model->targetConfiguration = targetConfiguration::fromMap($map['targetConfiguration']);
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
