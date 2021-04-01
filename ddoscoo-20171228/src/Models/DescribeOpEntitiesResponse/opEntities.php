<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeOpEntitiesResponse;

use AlibabaCloud\Tea\Model;

class opEntities extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $entityType;

    /**
     * @var string
     */
    public $entityObject;

    /**
     * @var int
     */
    public $opAction;

    /**
     * @var string
     */
    public $opAccount;

    /**
     * @var string
     */
    public $opDesc;
    protected $_name = [
        'gmtCreate'    => 'GmtCreate',
        'entityType'   => 'EntityType',
        'entityObject' => 'EntityObject',
        'opAction'     => 'OpAction',
        'opAccount'    => 'OpAccount',
        'opDesc'       => 'OpDesc',
    ];

    public function validate()
    {
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('entityObject', $this->entityObject, true);
        Model::validateRequired('opAction', $this->opAction, true);
        Model::validateRequired('opAccount', $this->opAccount, true);
        Model::validateRequired('opDesc', $this->opDesc, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->entityObject) {
            $res['EntityObject'] = $this->entityObject;
        }
        if (null !== $this->opAction) {
            $res['OpAction'] = $this->opAction;
        }
        if (null !== $this->opAccount) {
            $res['OpAccount'] = $this->opAccount;
        }
        if (null !== $this->opDesc) {
            $res['OpDesc'] = $this->opDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return opEntities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['EntityObject'])) {
            $model->entityObject = $map['EntityObject'];
        }
        if (isset($map['OpAction'])) {
            $model->opAction = $map['OpAction'];
        }
        if (isset($map['OpAccount'])) {
            $model->opAccount = $map['OpAccount'];
        }
        if (isset($map['OpDesc'])) {
            $model->opDesc = $map['OpDesc'];
        }

        return $model;
    }
}
