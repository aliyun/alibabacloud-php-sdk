<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class BindAuthToMachineRequest extends Model
{
    /**
     * @var int
     */
    public $authVersion;

    /**
     * @var int
     */
    public $autoBind;

    /**
     * @var string[]
     */
    public $bind;

    /**
     * @var bool
     */
    public $bindAll;

    /**
     * @var string
     */
    public $criteria;

    /**
     * @var int
     */
    public $isPreBind;

    /**
     * @var string
     */
    public $logicalExp;

    /**
     * @var string
     */
    public $ntmVersion;

    /**
     * @var int
     */
    public $preBindOrderId;

    /**
     * @var string[]
     */
    public $unBind;
    protected $_name = [
        'authVersion' => 'AuthVersion',
        'autoBind' => 'AutoBind',
        'bind' => 'Bind',
        'bindAll' => 'BindAll',
        'criteria' => 'Criteria',
        'isPreBind' => 'IsPreBind',
        'logicalExp' => 'LogicalExp',
        'ntmVersion' => 'NtmVersion',
        'preBindOrderId' => 'PreBindOrderId',
        'unBind' => 'UnBind',
    ];

    public function validate()
    {
        if (\is_array($this->bind)) {
            Model::validateArray($this->bind);
        }
        if (\is_array($this->unBind)) {
            Model::validateArray($this->unBind);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }

        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }

        if (null !== $this->bind) {
            if (\is_array($this->bind)) {
                $res['Bind'] = [];
                $n1 = 0;
                foreach ($this->bind as $item1) {
                    $res['Bind'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bindAll) {
            $res['BindAll'] = $this->bindAll;
        }

        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->isPreBind) {
            $res['IsPreBind'] = $this->isPreBind;
        }

        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }

        if (null !== $this->ntmVersion) {
            $res['NtmVersion'] = $this->ntmVersion;
        }

        if (null !== $this->preBindOrderId) {
            $res['PreBindOrderId'] = $this->preBindOrderId;
        }

        if (null !== $this->unBind) {
            if (\is_array($this->unBind)) {
                $res['UnBind'] = [];
                $n1 = 0;
                foreach ($this->unBind as $item1) {
                    $res['UnBind'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }

        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }

        if (isset($map['Bind'])) {
            if (!empty($map['Bind'])) {
                $model->bind = [];
                $n1 = 0;
                foreach ($map['Bind'] as $item1) {
                    $model->bind[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BindAll'])) {
            $model->bindAll = $map['BindAll'];
        }

        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['IsPreBind'])) {
            $model->isPreBind = $map['IsPreBind'];
        }

        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }

        if (isset($map['NtmVersion'])) {
            $model->ntmVersion = $map['NtmVersion'];
        }

        if (isset($map['PreBindOrderId'])) {
            $model->preBindOrderId = $map['PreBindOrderId'];
        }

        if (isset($map['UnBind'])) {
            if (!empty($map['UnBind'])) {
                $model->unBind = [];
                $n1 = 0;
                foreach ($map['UnBind'] as $item1) {
                    $model->unBind[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
