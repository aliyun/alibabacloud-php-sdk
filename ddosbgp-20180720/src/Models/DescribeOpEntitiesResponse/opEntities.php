<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOpEntitiesResponse;

use AlibabaCloud\Tea\Model;

class opEntities extends Model
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
     * @var string
     */
    public $opDesc;

    /**
     * @var string
     */
    public $opAccount;

    /**
     * @var int
     */
    public $opAction;

    /**
     * @var int
     */
    public $gmtCreate;
    protected $_name = [
        'entityObject' => 'EntityObject',
        'entityType'   => 'EntityType',
        'opDesc'       => 'OpDesc',
        'opAccount'    => 'OpAccount',
        'opAction'     => 'OpAction',
        'gmtCreate'    => 'GmtCreate',
    ];

    public function validate()
    {
        Model::validateRequired('entityObject', $this->entityObject, true);
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('opDesc', $this->opDesc, true);
        Model::validateRequired('opAccount', $this->opAccount, true);
        Model::validateRequired('opAction', $this->opAction, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityObject) {
            $res['EntityObject'] = $this->entityObject;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->opDesc) {
            $res['OpDesc'] = $this->opDesc;
        }
        if (null !== $this->opAccount) {
            $res['OpAccount'] = $this->opAccount;
        }
        if (null !== $this->opAction) {
            $res['OpAction'] = $this->opAction;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (isset($map['EntityObject'])) {
            $model->entityObject = $map['EntityObject'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['OpDesc'])) {
            $model->opDesc = $map['OpDesc'];
        }
        if (isset($map['OpAccount'])) {
            $model->opAccount = $map['OpAccount'];
        }
        if (isset($map['OpAction'])) {
            $model->opAction = $map['OpAction'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
