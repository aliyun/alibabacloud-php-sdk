<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $logicalExp;

    /**
     * @var string[]
     */
    public $unBind;
    protected $_name = [
        'authVersion' => 'AuthVersion',
        'autoBind'    => 'AutoBind',
        'bind'        => 'Bind',
        'bindAll'     => 'BindAll',
        'criteria'    => 'Criteria',
        'logicalExp'  => 'LogicalExp',
        'unBind'      => 'UnBind',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->bindAll) {
            $res['BindAll'] = $this->bindAll;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->unBind) {
            $res['UnBind'] = $this->unBind;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAuthToMachineRequest
     */
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
                $model->bind = $map['Bind'];
            }
        }
        if (isset($map['BindAll'])) {
            $model->bindAll = $map['BindAll'];
        }
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['UnBind'])) {
            if (!empty($map['UnBind'])) {
                $model->unBind = $map['UnBind'];
            }
        }

        return $model;
    }
}
