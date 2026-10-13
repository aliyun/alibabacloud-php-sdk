<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class MigrateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appIds;

    /**
     * @var string
     */
    public $cmd;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $rawData;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appIds' => 'appIds',
        'cmd' => 'cmd',
        'config' => 'config',
        'rawData' => 'rawData',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['appIds'] = $this->appIds;
        }

        if (null !== $this->cmd) {
            $res['cmd'] = $this->cmd;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->rawData) {
            $res['rawData'] = $this->rawData;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['appIds'])) {
            $model->appIds = $map['appIds'];
        }

        if (isset($map['cmd'])) {
            $model->cmd = $map['cmd'];
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['rawData'])) {
            $model->rawData = $map['rawData'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
