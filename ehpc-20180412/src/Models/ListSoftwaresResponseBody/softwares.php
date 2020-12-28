<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\applications;
use AlibabaCloud\Tea\Model;

class softwares extends Model
{
    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $schedulerVersion;

    /**
     * @var string
     */
    public $accountVersion;

    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $ehpcVersion;
    protected $_name = [
        'schedulerType'    => 'SchedulerType',
        'osTag'            => 'OsTag',
        'schedulerVersion' => 'SchedulerVersion',
        'accountVersion'   => 'AccountVersion',
        'applications'     => 'Applications',
        'accountType'      => 'AccountType',
        'ehpcVersion'      => 'EhpcVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->schedulerVersion) {
            $res['SchedulerVersion'] = $this->schedulerVersion;
        }
        if (null !== $this->accountVersion) {
            $res['AccountVersion'] = $this->accountVersion;
        }
        if (null !== $this->applications) {
            $res['Applications'] = [];
            if (null !== $this->applications && \is_array($this->applications)) {
                $n = 0;
                foreach ($this->applications as $item) {
                    $res['Applications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['SchedulerVersion'])) {
            $model->schedulerVersion = $map['SchedulerVersion'];
        }
        if (isset($map['AccountVersion'])) {
            $model->accountVersion = $map['AccountVersion'];
        }
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n                   = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? applications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }

        return $model;
    }
}
