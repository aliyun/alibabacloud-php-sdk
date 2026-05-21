<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetLastUpgradeRecordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fromVersion;

    /**
     * @var string
     */
    public $startReadonlyTime;

    /**
     * @var string
     */
    public $stopReadonlyTime;

    /**
     * @var string
     */
    public $toVersion;
    protected $_name = [
        'fromVersion' => 'fromVersion',
        'startReadonlyTime' => 'startReadonlyTime',
        'stopReadonlyTime' => 'stopReadonlyTime',
        'toVersion' => 'toVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromVersion) {
            $res['fromVersion'] = $this->fromVersion;
        }

        if (null !== $this->startReadonlyTime) {
            $res['startReadonlyTime'] = $this->startReadonlyTime;
        }

        if (null !== $this->stopReadonlyTime) {
            $res['stopReadonlyTime'] = $this->stopReadonlyTime;
        }

        if (null !== $this->toVersion) {
            $res['toVersion'] = $this->toVersion;
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
        if (isset($map['fromVersion'])) {
            $model->fromVersion = $map['fromVersion'];
        }

        if (isset($map['startReadonlyTime'])) {
            $model->startReadonlyTime = $map['startReadonlyTime'];
        }

        if (isset($map['stopReadonlyTime'])) {
            $model->stopReadonlyTime = $map['stopReadonlyTime'];
        }

        if (isset($map['toVersion'])) {
            $model->toVersion = $map['toVersion'];
        }

        return $model;
    }
}
