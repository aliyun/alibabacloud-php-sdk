<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\RankingSystemHistory\meta;

use AlibabaCloud\Tea\Model;

class predictEngine extends Model
{
    /**
     * @example eas-oljkkdrggxhx7eizjd
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'resourceId' => 'ResourceId',
        'version'    => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return predictEngine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
