<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathEventResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathEventResponseBody\attackPathEventList\dstAsset;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathEventResponseBody\attackPathEventList\srcAsset;

class attackPathEventList extends Model
{
    /**
     * @var dstAsset
     */
    public $dstAsset;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $pathName;

    /**
     * @var string
     */
    public $pathNameDesc;

    /**
     * @var string
     */
    public $pathType;

    /**
     * @var string
     */
    public $pathTypeDesc;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var srcAsset
     */
    public $srcAsset;
    protected $_name = [
        'dstAsset' => 'DstAsset',
        'eventId' => 'EventId',
        'lastTime' => 'LastTime',
        'pathName' => 'PathName',
        'pathNameDesc' => 'PathNameDesc',
        'pathType' => 'PathType',
        'pathTypeDesc' => 'PathTypeDesc',
        'riskLevel' => 'RiskLevel',
        'srcAsset' => 'SrcAsset',
    ];

    public function validate()
    {
        if (null !== $this->dstAsset) {
            $this->dstAsset->validate();
        }
        if (null !== $this->srcAsset) {
            $this->srcAsset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstAsset) {
            $res['DstAsset'] = null !== $this->dstAsset ? $this->dstAsset->toArray($noStream) : $this->dstAsset;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }

        if (null !== $this->pathNameDesc) {
            $res['PathNameDesc'] = $this->pathNameDesc;
        }

        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }

        if (null !== $this->pathTypeDesc) {
            $res['PathTypeDesc'] = $this->pathTypeDesc;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->srcAsset) {
            $res['SrcAsset'] = null !== $this->srcAsset ? $this->srcAsset->toArray($noStream) : $this->srcAsset;
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
        if (isset($map['DstAsset'])) {
            $model->dstAsset = dstAsset::fromMap($map['DstAsset']);
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }

        if (isset($map['PathNameDesc'])) {
            $model->pathNameDesc = $map['PathNameDesc'];
        }

        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }

        if (isset($map['PathTypeDesc'])) {
            $model->pathTypeDesc = $map['PathTypeDesc'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SrcAsset'])) {
            $model->srcAsset = srcAsset::fromMap($map['SrcAsset']);
        }

        return $model;
    }
}
