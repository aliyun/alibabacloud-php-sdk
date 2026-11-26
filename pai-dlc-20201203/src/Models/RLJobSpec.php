<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLJobSpec extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
     * @var int
     */
    public $podCount;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var ResourceConfig
     */
    public $resourceConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'image' => 'Image',
        'podCount' => 'PodCount',
        'quotaId' => 'QuotaId',
        'resourceConfig' => 'ResourceConfig',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->resourceConfig) {
            $this->resourceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->resourceConfig) {
            $res['ResourceConfig'] = null !== $this->resourceConfig ? $this->resourceConfig->toArray($noStream) : $this->resourceConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['ResourceConfig'])) {
            $model->resourceConfig = ResourceConfig::fromMap($map['ResourceConfig']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
