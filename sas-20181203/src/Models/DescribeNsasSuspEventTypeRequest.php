<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeNsasSuspEventTypeRequest extends Model
{
    /**
     * @var string
     */
    public $containerFieldName;

    /**
     * @var string
     */
    public $containerFieldValue;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $multiAccountActionType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string[]
     */
    public $supportOperateCodeList;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'containerFieldName' => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'from' => 'From',
        'lang' => 'Lang',
        'multiAccountActionType' => 'MultiAccountActionType',
        'name' => 'Name',
        'remark' => 'Remark',
        'sourceIp' => 'SourceIp',
        'supportOperateCodeList' => 'SupportOperateCodeList',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        if (\is_array($this->supportOperateCodeList)) {
            Model::validateArray($this->supportOperateCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }

        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->multiAccountActionType) {
            $res['MultiAccountActionType'] = $this->multiAccountActionType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->supportOperateCodeList) {
            if (\is_array($this->supportOperateCodeList)) {
                $res['SupportOperateCodeList'] = [];
                $n1 = 0;
                foreach ($this->supportOperateCodeList as $item1) {
                    $res['SupportOperateCodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
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
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }

        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MultiAccountActionType'])) {
            $model->multiAccountActionType = $map['MultiAccountActionType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SupportOperateCodeList'])) {
            if (!empty($map['SupportOperateCodeList'])) {
                $model->supportOperateCodeList = [];
                $n1 = 0;
                foreach ($map['SupportOperateCodeList'] as $item1) {
                    $model->supportOperateCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
