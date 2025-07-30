<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList\structureInitializationDetail\constraintList;

use AlibabaCloud\Tea\Model;

class structureInitializationDetail extends Model
{
    /**
     * @description The status of constraint creation. Valid values:
     *
     * - **NotStarted**
     * - **Migrating**
     * - **Failed**
     * - **Finished**
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $destinationOwnerDBName;

    /**
     * @description The constraints of the migration object, such as indexes and foreign keys.
     *
     * >  This parameter is returned only if the **ObjectType** parameter is set to **Table** and the migration object has constraints.
     *
     * @example DTS-1020042 Execute sql error sql: ERROR: type "geometry" does not exist；
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the database to which the migration object in the destination instance belongs.
     *
     * @example CREATE SEQUENCE "public"."collections_id_seq"   MINVALUE 1   MAXVALUE 9223372036854775807   START 249   INCREMENT BY 1 ;
     *
     * @var string
     */
    public $objectDefinition;

    /**
     * @description The name of the database to which the migration object in the source instance belongs.
     *
     * @example customer
     *
     * @var string
     */
    public $objectName;

    /**
     * @description The name of migration object.
     *
     * @example Table
     *
     * @var string
     */
    public $objectType;

    /**
     * @description The error message returned if schema migration failed.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceOwnerDBName;

    /**
     * @description The type of the migration object. Valid values: **Table**, **Constraint**, **Index**, **View**, **Materialize View**, **Type**, **Synonym**, **Trigger**, **Function**, **Procedure**, **Package**, **Default**, **Rule**, **PlanGuide**, and **Sequence**.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'destinationOwnerDBName' => 'DestinationOwnerDBName',
        'errorMessage' => 'ErrorMessage',
        'objectDefinition' => 'ObjectDefinition',
        'objectName' => 'ObjectName',
        'objectType' => 'ObjectType',
        'sourceOwnerDBName' => 'SourceOwnerDBName',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return structureInitializationDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
