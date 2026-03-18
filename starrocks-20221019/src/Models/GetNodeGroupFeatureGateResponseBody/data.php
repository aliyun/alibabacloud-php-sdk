<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\GetNodeGroupFeatureGateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $needRestartAfterModifyDiskSize;

    /**
     * @var bool
     */
    public $supportFastModeModifyResource;

    /**
     * @var bool
     */
    public $supportFastRestart;

    /**
     * @var bool
     */
    public $supportModifySpecType;
    protected $_name = [
        'needRestartAfterModifyDiskSize' => 'NeedRestartAfterModifyDiskSize',
        'supportFastModeModifyResource' => 'SupportFastModeModifyResource',
        'supportFastRestart' => 'SupportFastRestart',
        'supportModifySpecType' => 'SupportModifySpecType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needRestartAfterModifyDiskSize) {
            $res['NeedRestartAfterModifyDiskSize'] = $this->needRestartAfterModifyDiskSize;
        }

        if (null !== $this->supportFastModeModifyResource) {
            $res['SupportFastModeModifyResource'] = $this->supportFastModeModifyResource;
        }

        if (null !== $this->supportFastRestart) {
            $res['SupportFastRestart'] = $this->supportFastRestart;
        }

        if (null !== $this->supportModifySpecType) {
            $res['SupportModifySpecType'] = $this->supportModifySpecType;
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
        if (isset($map['NeedRestartAfterModifyDiskSize'])) {
            $model->needRestartAfterModifyDiskSize = $map['NeedRestartAfterModifyDiskSize'];
        }

        if (isset($map['SupportFastModeModifyResource'])) {
            $model->supportFastModeModifyResource = $map['SupportFastModeModifyResource'];
        }

        if (isset($map['SupportFastRestart'])) {
            $model->supportFastRestart = $map['SupportFastRestart'];
        }

        if (isset($map['SupportModifySpecType'])) {
            $model->supportModifySpecType = $map['SupportModifySpecType'];
        }

        return $model;
    }
}
