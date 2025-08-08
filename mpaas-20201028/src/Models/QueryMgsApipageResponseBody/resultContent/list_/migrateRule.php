<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApipageResponseBody\resultContent\list_;

use AlibabaCloud\Dara\Model;

class migrateRule extends Model
{
    /**
     * @var int
     */
    public $flowPercent;

    /**
     * @var bool
     */
    public $needMigrate;

    /**
     * @var bool
     */
    public $needSwitchCompletely;

    /**
     * @var int
     */
    public $sysId;

    /**
     * @var string
     */
    public $sysName;

    /**
     * @var string
     */
    public $upstreamType;
    protected $_name = [
        'flowPercent' => 'FlowPercent',
        'needMigrate' => 'NeedMigrate',
        'needSwitchCompletely' => 'NeedSwitchCompletely',
        'sysId' => 'SysId',
        'sysName' => 'SysName',
        'upstreamType' => 'UpstreamType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowPercent) {
            $res['FlowPercent'] = $this->flowPercent;
        }

        if (null !== $this->needMigrate) {
            $res['NeedMigrate'] = $this->needMigrate;
        }

        if (null !== $this->needSwitchCompletely) {
            $res['NeedSwitchCompletely'] = $this->needSwitchCompletely;
        }

        if (null !== $this->sysId) {
            $res['SysId'] = $this->sysId;
        }

        if (null !== $this->sysName) {
            $res['SysName'] = $this->sysName;
        }

        if (null !== $this->upstreamType) {
            $res['UpstreamType'] = $this->upstreamType;
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
        if (isset($map['FlowPercent'])) {
            $model->flowPercent = $map['FlowPercent'];
        }

        if (isset($map['NeedMigrate'])) {
            $model->needMigrate = $map['NeedMigrate'];
        }

        if (isset($map['NeedSwitchCompletely'])) {
            $model->needSwitchCompletely = $map['NeedSwitchCompletely'];
        }

        if (isset($map['SysId'])) {
            $model->sysId = $map['SysId'];
        }

        if (isset($map['SysName'])) {
            $model->sysName = $map['SysName'];
        }

        if (isset($map['UpstreamType'])) {
            $model->upstreamType = $map['UpstreamType'];
        }

        return $model;
    }
}
