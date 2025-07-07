<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListByApplicantResponseBody\data\todoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListByApplicantResponseBody\data\todoList\fromLe\managerList;

class fromLe extends Model
{
    /**
     * @var string
     */
    public $ecId;

    /**
     * @var string
     */
    public $leId;

    /**
     * @var string
     */
    public $licenseNumber;

    /**
     * @var int
     */
    public $manageableAccountCount;

    /**
     * @var int
     */
    public $managedAccountCount;

    /**
     * @var managerList[]
     */
    public $managerList;

    /**
     * @var string
     */
    public $nbId;

    /**
     * @var string
     */
    public $subjectName;

    /**
     * @var string
     */
    public $subjectType;
    protected $_name = [
        'ecId' => 'EcId',
        'leId' => 'LeId',
        'licenseNumber' => 'LicenseNumber',
        'manageableAccountCount' => 'ManageableAccountCount',
        'managedAccountCount' => 'ManagedAccountCount',
        'managerList' => 'ManagerList',
        'nbId' => 'NbId',
        'subjectName' => 'SubjectName',
        'subjectType' => 'SubjectType',
    ];

    public function validate()
    {
        if (\is_array($this->managerList)) {
            Model::validateArray($this->managerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecId) {
            $res['EcId'] = $this->ecId;
        }

        if (null !== $this->leId) {
            $res['LeId'] = $this->leId;
        }

        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = $this->licenseNumber;
        }

        if (null !== $this->manageableAccountCount) {
            $res['ManageableAccountCount'] = $this->manageableAccountCount;
        }

        if (null !== $this->managedAccountCount) {
            $res['ManagedAccountCount'] = $this->managedAccountCount;
        }

        if (null !== $this->managerList) {
            if (\is_array($this->managerList)) {
                $res['ManagerList'] = [];
                $n1 = 0;
                foreach ($this->managerList as $item1) {
                    $res['ManagerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nbId) {
            $res['NbId'] = $this->nbId;
        }

        if (null !== $this->subjectName) {
            $res['SubjectName'] = $this->subjectName;
        }

        if (null !== $this->subjectType) {
            $res['SubjectType'] = $this->subjectType;
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
        if (isset($map['EcId'])) {
            $model->ecId = $map['EcId'];
        }

        if (isset($map['LeId'])) {
            $model->leId = $map['LeId'];
        }

        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = $map['LicenseNumber'];
        }

        if (isset($map['ManageableAccountCount'])) {
            $model->manageableAccountCount = $map['ManageableAccountCount'];
        }

        if (isset($map['ManagedAccountCount'])) {
            $model->managedAccountCount = $map['ManagedAccountCount'];
        }

        if (isset($map['ManagerList'])) {
            if (!empty($map['ManagerList'])) {
                $model->managerList = [];
                $n1 = 0;
                foreach ($map['ManagerList'] as $item1) {
                    $model->managerList[$n1] = managerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NbId'])) {
            $model->nbId = $map['NbId'];
        }

        if (isset($map['SubjectName'])) {
            $model->subjectName = $map['SubjectName'];
        }

        if (isset($map['SubjectType'])) {
            $model->subjectType = $map['SubjectType'];
        }

        return $model;
    }
}
