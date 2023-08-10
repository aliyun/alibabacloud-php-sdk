<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody\structureInitializationDetails;

use AlibabaCloud\Tea\Model;

class constraints extends Model
{
    /**
     * @description The name of the database to which the object in the destination instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $destinationOwnerDBName;

    /**
     * @description The error message returned if constraints failed to be created.
     *
     * @example DTS-1020042 Execute sql error sql: ERROR: type "geometry" does not exist
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The syntax to create constraints.
     *
     * @example CREATE SEQUENCE "public"."collections_id_seq"   MINVALUE 1   MAXVALUE 9223372036854775807   START 249   INCREMENT BY 1 ;
     *
     * @var string
     */
    public $objectDefinition;

    /**
     * @description The name of the object.
     *
     * @example customer
     *
     * @var string
     */
    public $objectName;

    /**
     * @description The type of the object. Valid value: **Table**.
     *
     * @example Table
     *
     * @var string
     */
    public $objectType;

    /**
     * @description The name of the database to which the object in the source instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceOwnerDBName;

    /**
     * @description The status of constraint creation. Valid values:
     *
     *   **NotStarted**
     *   **Migrating**
     *   **Failed**
     *   **Finished**
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
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
    }

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
     * @return constraints
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
