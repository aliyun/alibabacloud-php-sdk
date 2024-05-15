<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOpEntitiesResponseBody;

use AlibabaCloud\Tea\Model;

class opEntities extends Model
{
    /**
     * @description Queries the operation logs of an Anti-DDoS Origin instance.
     *
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $entityObject;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](https://help.aliyun.com/document_detail/118841.html).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example 1
     *
     * @var int
     */
    public $entityType;

    /**
     * @description WB01342967
     *
     * @example 1635818114000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 171986973287****
     *
     * @var string
     */
    public $opAccount;

    /**
     * @description DescribeOpEntities
     *
     * @example 8
     *
     * @var int
     */
    public $opAction;

    /**
     * @example {"entity":{"baseBandwidth":20,"elasticBandwidth":20}}
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
