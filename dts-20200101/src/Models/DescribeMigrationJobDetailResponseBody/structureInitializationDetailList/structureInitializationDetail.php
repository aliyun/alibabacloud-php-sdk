<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList\structureInitializationDetail\constraintList;

class structureInitializationDetail extends Model
{
    /**
     * @var constraintList
     */
    public $constraintList;
    /**
     * @var string
     */
    public $destinationOwnerDBName;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $objectDefinition;
    /**
     * @var string
     */
    public $objectName;
    /**
     * @var string
     */
    public $objectType;
    /**
     * @var string
     */
    public $sourceOwnerDBName;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'constraintList'         => 'ConstraintList',
        'destinationOwnerDBName' => 'DestinationOwnerDBName',
        'errorMessage'           => 'ErrorMessage',
        'objectDefinition'       => 'ObjectDefinition',
        'objectName'             => 'ObjectName',
        'objectType'             => 'ObjectType',
        'sourceOwnerDBName'      => 'SourceOwnerDBName',
        'status'                 => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->constraintList) {
            $this->constraintList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constraintList) {
            $res['ConstraintList'] = null !== $this->constraintList ? $this->constraintList->toArray($noStream) : $this->constraintList;
        }

        if (null !== $this->destinationOwnerDBName) {
            $res['DestinationOwnerDBName'] = $this->destinationOwnerDBName;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->objectDefinition) {
            $res['ObjectDefinition'] = $this->objectDefinition;
        }

        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->sourceOwnerDBName) {
            $res['SourceOwnerDBName'] = $this->sourceOwnerDBName;
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
        if (isset($map['ConstraintList'])) {
            $model->constraintList = constraintList::fromMap($map['ConstraintList']);
        }

        if (isset($map['DestinationOwnerDBName'])) {
            $model->destinationOwnerDBName = $map['DestinationOwnerDBName'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ObjectDefinition'])) {
            $model->objectDefinition = $map['ObjectDefinition'];
        }

        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['SourceOwnerDBName'])) {
            $model->sourceOwnerDBName = $map['SourceOwnerDBName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
