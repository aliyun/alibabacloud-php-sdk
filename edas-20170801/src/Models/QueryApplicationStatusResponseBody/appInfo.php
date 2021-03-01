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
     * @var ecuList
     */
    public $ecuList;

    /**
     * @var eccList
     */
    public $eccList;

    /**
     * @var groupList
     */
    public $groupList;

    /**
     * @var deployRecordList
     */
    public $deployRecordList;

    /**
     * @var application
     */
    public $application;
    protected $_name = [
        'ecuList'          => 'EcuList',
        'eccList'          => 'EccList',
        'groupList'        => 'GroupList',
        'deployRecordList' => 'DeployRecordList',
        'application'      => 'Application',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecuList) {
            $res['EcuList'] = null !== $this->ecuList ? $this->ecuList->toMap() : null;
        }
        if (null !== $this->eccList) {
            $res['EccList'] = null !== $this->eccList ? $this->eccList->toMap() : null;
        }
        if (null !== $this->groupList) {
            $res['GroupList'] = null !== $this->groupList ? $this->groupList->toMap() : null;
        }
        if (null !== $this->deployRecordList) {
            $res['DeployRecordList'] = null !== $this->deployRecordList ? $this->deployRecordList->toMap() : null;
        }
        if (null !== $this->application) {
            $res['Application'] = null !== $this->application ? $this->application->toMap() : null;
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
        if (isset($map['EcuList'])) {
            $model->ecuList = ecuList::fromMap($map['EcuList']);
        }
        if (isset($map['EccList'])) {
            $model->eccList = eccList::fromMap($map['EccList']);
        }
        if (isset($map['GroupList'])) {
            $model->groupList = groupList::fromMap($map['GroupList']);
        }
        if (isset($map['DeployRecordList'])) {
            $model->deployRecordList = deployRecordList::fromMap($map['DeployRecordList']);
        }
        if (isset($map['Application'])) {
            $model->application = application::fromMap($map['Application']);
        }

        return $model;
    }
}
