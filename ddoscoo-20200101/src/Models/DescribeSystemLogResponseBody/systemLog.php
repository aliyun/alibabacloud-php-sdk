<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSystemLogResponseBody;

use AlibabaCloud\Dara\Model;

class systemLog extends Model
{
    /**
     * @var string
     */
    public $entityObject;

    /**
     * @var int
     */
    public $entityType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $opAccount;

    /**
     * @var int
     */
    public $opAction;

    /**
     * @var string
     */
    public $opDesc;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'entityObject' => 'EntityObject',
        'entityType' => 'EntityType',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'opAccount' => 'OpAccount',
        'opAction' => 'OpAction',
        'opDesc' => 'OpDesc',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityObject) {
            $res['EntityObject'] = $this->entityObject;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->opAccount) {
            $res['OpAccount'] = $this->opAccount;
        }

        if (null !== $this->opAction) {
            $res['OpAction'] = $this->opAction;
        }

        if (null !== $this->opDesc) {
            $res['OpDesc'] = $this->opDesc;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EntityObject'])) {
            $model->entityObject = $map['EntityObject'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['OpAccount'])) {
            $model->opAccount = $map['OpAccount'];
        }

        if (isset($map['OpAction'])) {
            $model->opAction = $map['OpAction'];
        }

        if (isset($map['OpDesc'])) {
            $model->opDesc = $map['OpDesc'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
