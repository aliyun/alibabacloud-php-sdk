<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class InnerStopCardsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $iccids;

    /**
     * @var bool
     */
    public $innerApi;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $task;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
        'iccids'      => 'Iccids',
        'innerApi'    => 'InnerApi',
        'regionId'    => 'RegionId',
        'task'        => 'Task',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->iccids) {
            $res['Iccids'] = $this->iccids;
        }
        if (null !== $this->innerApi) {
            $res['InnerApi'] = $this->innerApi;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InnerStopCardsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Iccids'])) {
            if (!empty($map['Iccids'])) {
                $model->iccids = $map['Iccids'];
            }
        }
        if (isset($map['InnerApi'])) {
            $model->innerApi = $map['InnerApi'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }

        return $model;
    }
}
