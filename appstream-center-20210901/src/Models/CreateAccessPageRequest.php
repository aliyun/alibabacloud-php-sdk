<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessPageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $accessPageName;

    /**
     * @example c-e-06gdesdaxez****
     *
     * @var string
     */
    public $cloudEnvId;

    /**
     * @example 7
     *
     * @var int
     */
    public $effectTime;

    /**
     * @description This parameter is required.
     *
     * @example p-065zdecaer07h****
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example Day
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'accessPageName' => 'AccessPageName',
        'cloudEnvId'     => 'CloudEnvId',
        'effectTime'     => 'EffectTime',
        'projectId'      => 'ProjectId',
        'projectName'    => 'ProjectName',
        'unit'           => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPageName) {
            $res['AccessPageName'] = $this->accessPageName;
        }
        if (null !== $this->cloudEnvId) {
            $res['CloudEnvId'] = $this->cloudEnvId;
        }
        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPageName'])) {
            $model->accessPageName = $map['AccessPageName'];
        }
        if (isset($map['CloudEnvId'])) {
            $model->cloudEnvId = $map['CloudEnvId'];
        }
        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
