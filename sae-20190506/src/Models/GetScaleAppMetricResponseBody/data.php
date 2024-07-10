<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\GetScaleAppMetricResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The application ID.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The maximum number of instances.
     *
     * @example 10
     *
     * @var int
     */
    public $maxReplicas;

    /**
     * @description The application name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The current number of instances.
     *
     * @example 10
     *
     * @var int
     */
    public $runnings;
    protected $_name = [
        'appId'       => 'AppId',
        'maxReplicas' => 'MaxReplicas',
        'name'        => 'Name',
        'regionId'    => 'RegionId',
        'runnings'    => 'Runnings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->runnings) {
            $res['Runnings'] = $this->runnings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Runnings'])) {
            $model->runnings = $map['Runnings'];
        }

        return $model;
    }
}
