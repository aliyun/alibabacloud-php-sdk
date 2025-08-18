<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizEntityRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizEntityRequest\updateCommand\bizObject;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizEntityRequest\updateCommand\bizProcess;

class updateCommand extends Model
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
     * @var int
     */
    public $bizUnitId;

    /**
     * @var int
     */
    public $dataDomainId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizObject' => 'BizObject',
        'bizProcess' => 'BizProcess',
        'bizUnitId' => 'BizUnitId',
        'dataDomainId' => 'DataDomainId',
        'id' => 'Id',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->bizObject) {
            $this->bizObject->validate();
        }
        if (null !== $this->bizProcess) {
            $this->bizProcess->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizObject) {
            $res['BizObject'] = null !== $this->bizObject ? $this->bizObject->toArray($noStream) : $this->bizObject;
        }

        if (null !== $this->bizProcess) {
            $res['BizProcess'] = null !== $this->bizProcess ? $this->bizProcess->toArray($noStream) : $this->bizProcess;
        }

        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->dataDomainId) {
            $res['DataDomainId'] = $this->dataDomainId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
