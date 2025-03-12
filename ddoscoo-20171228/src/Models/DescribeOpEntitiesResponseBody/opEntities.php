<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeOpEntitiesResponseBody;

use AlibabaCloud\Tea\Model;

class opEntities extends Model
{
    /**
     * @example 2.2.2.2
     *
     * @var string
     */
    public $entityObject;

    /**
     * @example 1
     *
     * @var int
     */
    public $entityType;

    /**
     * @example 1536715558000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 123
     *
     * @var string
     */
    public $opAccount;

    /**
     * @example 1
     *
     * @var int
     */
    public $opAction;

    /**
     * @example {"newEntity":{"elasticBandwidth":30},"oldEntity":{"elasticBandwidth":200}}
     *
     * @var string
     */
    public $opDesc;
    protected $_name = [
        'entityObject' => 'EntityObject',
        'entityType'   => 'EntityType',
        'gmtCreate'    => 'GmtCreate',
        'opAccount'    => 'OpAccount',
        'opAction'     => 'OpAction',
        'opDesc'       => 'OpDesc',
    ];

    public function validate()
    {
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
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

        return $model;
    }
}
