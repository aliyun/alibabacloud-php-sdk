<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizEntityInfoByVersionResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizEntityInfoByVersionResponseBody\bizEntityInfo\bizObject;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizEntityInfoByVersionResponseBody\bizEntityInfo\bizProcess;
use AlibabaCloud\Tea\Model;

class bizEntityInfo extends Model
{
    /**
     * @var bizObject
     */
    public $bizObject;

    /**
     * @var bizProcess
     */
    public $bizProcess;

    /**
     * @example 6798087749072704
     *
     * @var int
     */
    public $bizUnitId;

    /**
     * @example 20101011
     *
     * @var int
     */
    public $dataDomainId;

    /**
     * @example BIZ_OBJECT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizObject'    => 'BizObject',
        'bizProcess'   => 'BizProcess',
        'bizUnitId'    => 'BizUnitId',
        'dataDomainId' => 'DataDomainId',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizObject) {
            $res['BizObject'] = null !== $this->bizObject ? $this->bizObject->toMap() : null;
        }
        if (null !== $this->bizProcess) {
            $res['BizProcess'] = null !== $this->bizProcess ? $this->bizProcess->toMap() : null;
        }
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->dataDomainId) {
            $res['DataDomainId'] = $this->dataDomainId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizEntityInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizObject'])) {
            $model->bizObject = bizObject::fromMap($map['BizObject']);
        }
        if (isset($map['BizProcess'])) {
            $model->bizProcess = bizProcess::fromMap($map['BizProcess']);
        }
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['DataDomainId'])) {
            $model->dataDomainId = $map['DataDomainId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
