<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\application;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\deployRecordList;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\eccList;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\ecuList;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\groupList;

class appInfo extends Model
{
    /**
     * @var application
     */
    public $application;

    /**
     * @var deployRecordList
     */
    public $deployRecordList;

    /**
     * @var eccList
     */
    public $eccList;

    /**
     * @var ecuList
     */
    public $ecuList;

    /**
     * @var groupList
     */
    public $groupList;
    protected $_name = [
        'application' => 'Application',
        'deployRecordList' => 'DeployRecordList',
        'eccList' => 'EccList',
        'ecuList' => 'EcuList',
        'groupList' => 'GroupList',
    ];

    public function validate()
    {
        if (null !== $this->application) {
            $this->application->validate();
        }
        if (null !== $this->deployRecordList) {
            $this->deployRecordList->validate();
        }
        if (null !== $this->eccList) {
            $this->eccList->validate();
        }
        if (null !== $this->ecuList) {
            $this->ecuList->validate();
        }
        if (null !== $this->groupList) {
            $this->groupList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = null !== $this->application ? $this->application->toArray($noStream) : $this->application;
        }

        if (null !== $this->deployRecordList) {
            $res['DeployRecordList'] = null !== $this->deployRecordList ? $this->deployRecordList->toArray($noStream) : $this->deployRecordList;
        }

        if (null !== $this->eccList) {
            $res['EccList'] = null !== $this->eccList ? $this->eccList->toArray($noStream) : $this->eccList;
        }

        if (null !== $this->ecuList) {
            $res['EcuList'] = null !== $this->ecuList ? $this->ecuList->toArray($noStream) : $this->ecuList;
        }

        if (null !== $this->groupList) {
            $res['GroupList'] = null !== $this->groupList ? $this->groupList->toArray($noStream) : $this->groupList;
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
