<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class ExportJobsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $exportJobType;

    /**
     * @var string
     */
    public $jobIdsShrink;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'exportJobType' => 'ExportJobType',
        'jobIdsShrink' => 'JobIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->exportJobType) {
            $res['ExportJobType'] = $this->exportJobType;
        }

        if (null !== $this->jobIdsShrink) {
            $res['JobIds'] = $this->jobIdsShrink;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ExportJobType'])) {
            $model->exportJobType = $map['ExportJobType'];
        }

        if (isset($map['JobIds'])) {
            $model->jobIdsShrink = $map['JobIds'];
        }

        return $model;
    }
}
