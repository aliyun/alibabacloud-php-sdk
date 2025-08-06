<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoRequest\option\preCheckParam;

class option extends Model
{
    /**
     * @var preCheckParam
     */
    public $preCheckParam;

    /**
     * @var bool
     */
    public $preferIntranet;

    /**
     * @var string
     */
    public $preferRegion;

    /**
     * @var string
     */
    public $storageDriver;
    protected $_name = [
        'preCheckParam' => 'PreCheckParam',
        'preferIntranet' => 'PreferIntranet',
        'preferRegion' => 'PreferRegion',
        'storageDriver' => 'StorageDriver',
    ];

    public function validate()
    {
        if (null !== $this->preCheckParam) {
            $this->preCheckParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preCheckParam) {
            $res['PreCheckParam'] = null !== $this->preCheckParam ? $this->preCheckParam->toArray($noStream) : $this->preCheckParam;
        }

        if (null !== $this->preferIntranet) {
            $res['PreferIntranet'] = $this->preferIntranet;
        }

        if (null !== $this->preferRegion) {
            $res['PreferRegion'] = $this->preferRegion;
        }

        if (null !== $this->storageDriver) {
            $res['StorageDriver'] = $this->storageDriver;
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
        if (isset($map['PreCheckParam'])) {
            $model->preCheckParam = preCheckParam::fromMap($map['PreCheckParam']);
        }

        if (isset($map['PreferIntranet'])) {
            $model->preferIntranet = $map['PreferIntranet'];
        }

        if (isset($map['PreferRegion'])) {
            $model->preferRegion = $map['PreferRegion'];
        }

        if (isset($map['StorageDriver'])) {
            $model->storageDriver = $map['StorageDriver'];
        }

        return $model;
    }
}
