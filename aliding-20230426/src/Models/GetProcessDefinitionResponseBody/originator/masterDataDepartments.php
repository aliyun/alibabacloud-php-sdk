<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\originator;

use AlibabaCloud\Tea\Model;

class masterDataDepartments extends Model
{
    /**
     * @example 开发部
     *
     * @var string
     */
    public $deptName;

    /**
     * @example development department
     *
     * @var string
     */
    public $deptNameInEnglish;

    /**
     * @example develop-A
     *
     * @var string
     */
    public $deptNo;

    /**
     * @example 总部-开发部
     *
     * @var string
     */
    public $deptPath;

    /**
     * @example xxafafaf
     *
     * @var string
     */
    public $humanSourceGroupOrderNumber;

    /**
     * @example 123311221
     *
     * @var string
     */
    public $humanSourceGroupWorkNo;

    /**
     * @example 12345
     *
     * @var int
     */
    public $id;

    /**
     * @example 1732245789
     *
     * @var string
     */
    public $masterWorkNo;
    protected $_name = [
        'deptName'                    => 'DeptName',
        'deptNameInEnglish'           => 'DeptNameInEnglish',
        'deptNo'                      => 'DeptNo',
        'deptPath'                    => 'DeptPath',
        'humanSourceGroupOrderNumber' => 'HumanSourceGroupOrderNumber',
        'humanSourceGroupWorkNo'      => 'HumanSourceGroupWorkNo',
        'id'                          => 'Id',
        'masterWorkNo'                => 'MasterWorkNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deptName) {
            $res['DeptName'] = $this->deptName;
        }
        if (null !== $this->deptNameInEnglish) {
            $res['DeptNameInEnglish'] = $this->deptNameInEnglish;
        }
        if (null !== $this->deptNo) {
            $res['DeptNo'] = $this->deptNo;
        }
        if (null !== $this->deptPath) {
            $res['DeptPath'] = $this->deptPath;
        }
        if (null !== $this->humanSourceGroupOrderNumber) {
            $res['HumanSourceGroupOrderNumber'] = $this->humanSourceGroupOrderNumber;
        }
        if (null !== $this->humanSourceGroupWorkNo) {
            $res['HumanSourceGroupWorkNo'] = $this->humanSourceGroupWorkNo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->masterWorkNo) {
            $res['MasterWorkNo'] = $this->masterWorkNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterDataDepartments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeptName'])) {
            $model->deptName = $map['DeptName'];
        }
        if (isset($map['DeptNameInEnglish'])) {
            $model->deptNameInEnglish = $map['DeptNameInEnglish'];
        }
        if (isset($map['DeptNo'])) {
            $model->deptNo = $map['DeptNo'];
        }
        if (isset($map['DeptPath'])) {
            $model->deptPath = $map['DeptPath'];
        }
        if (isset($map['HumanSourceGroupOrderNumber'])) {
            $model->humanSourceGroupOrderNumber = $map['HumanSourceGroupOrderNumber'];
        }
        if (isset($map['HumanSourceGroupWorkNo'])) {
            $model->humanSourceGroupWorkNo = $map['HumanSourceGroupWorkNo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MasterWorkNo'])) {
            $model->masterWorkNo = $map['MasterWorkNo'];
        }

        return $model;
    }
}
