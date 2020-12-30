<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeOpEntitiesResponseBody;

use AlibabaCloud\Tea\Model;

class opEntities extends Model
{
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
    public $gmtCreate;

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
        'entityType'   => 'EntityType',
        'entityObject' => 'EntityObject',
        'gmtCreate'    => 'GmtCreate',
        'opAction'     => 'OpAction',
        'opAccount'    => 'OpAccount',
        'opDesc'       => 'OpDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->entityObject) {
            $res['EntityObject'] = $this->entityObject;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['EntityObject'])) {
            $model->entityObject = $map['EntityObject'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
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
