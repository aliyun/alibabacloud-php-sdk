<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateAccessPageRequest extends Model
{
    /**
     * @var string
     */
    public $accessPageName;

    /**
     * @var string
     */
    public $cloudEnvId;

    /**
     * @var int
     */
    public $effectTime;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'accessPageName' => 'AccessPageName',
        'cloudEnvId' => 'CloudEnvId',
        'effectTime' => 'EffectTime',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
