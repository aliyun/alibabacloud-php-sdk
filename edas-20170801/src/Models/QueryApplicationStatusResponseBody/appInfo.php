<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\application;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\deployRecordList;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\eccList;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\ecuList;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\groupList;
use AlibabaCloud\Tea\Model;

class appInfo extends Model
{
    /**
     * @description The basic information about the application.
     *
     * @var application
     */
    public $application;

    /**
     * @description The information about deployment records.
     *
     * @var deployRecordList
     */
    public $deployRecordList;

    /**
     * @description The information about elastic compute containers (ECCs).
     *
     * @var eccList
     */
    public $eccList;

    /**
     * @description The information about elastic compute units (ECUs).
     *
     * @var ecuList
     */
    public $ecuList;

    /**
     * @description The information about the instance groups.
     *
     * @var groupList
     */
    public $groupList;
    protected $_name = [
        'application'      => 'Application',
        'deployRecordList' => 'DeployRecordList',
        'eccList'          => 'EccList',
        'ecuList'          => 'EcuList',
        'groupList'        => 'GroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = null !== $this->application ? $this->application->toMap() : null;
        }
        if (null !== $this->deployRecordList) {
            $res['DeployRecordList'] = null !== $this->deployRecordList ? $this->deployRecordList->toMap() : null;
        }
        if (null !== $this->eccList) {
            $res['EccList'] = null !== $this->eccList ? $this->eccList->toMap() : null;
        }
        if (null !== $this->ecuList) {
            $res['EcuList'] = null !== $this->ecuList ? $this->ecuList->toMap() : null;
        }
        if (null !== $this->groupList) {
            $res['GroupList'] = null !== $this->groupList ? $this->groupList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Application'])) {
            $model->application = application::fromMap($map['Application']);
        }
        if (isset($map['DeployRecordList'])) {
            $model->deployRecordList = deployRecordList::fromMap($map['DeployRecordList']);
        }
        if (isset($map['EccList'])) {
            $model->eccList = eccList::fromMap($map['EccList']);
        }
        if (isset($map['EcuList'])) {
            $model->ecuList = ecuList::fromMap($map['EcuList']);
        }
        if (isset($map['GroupList'])) {
            $model->groupList = groupList::fromMap($map['GroupList']);
        }

        return $model;
    }
}
