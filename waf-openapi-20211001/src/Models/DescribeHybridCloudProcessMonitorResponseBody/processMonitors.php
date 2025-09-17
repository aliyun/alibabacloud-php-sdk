<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudProcessMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class processMonitors extends Model
{
    /**
     * @var string
     */
    public $levle;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var int
     */
    public $processStatus;
    protected $_name = [
        'levle' => 'Levle',
        'processName' => 'ProcessName',
        'processStatus' => 'ProcessStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->levle) {
            $res['Levle'] = $this->levle;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
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
        if (isset($map['Levle'])) {
            $model->levle = $map['Levle'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }

        return $model;
    }
}
