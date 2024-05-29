<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponseBody\structureInitializationDetails\constraints;
use AlibabaCloud\Tea\Model;

class structureInitializationDetails extends Model
{
    /**
     * @description The constraints of the synchronization object, such as indexes and foreign keys.
     *
     * >  This parameter is returned only if the **ObjectType** parameter is set to **Table** and the synchronization object has constraints.
     * @var constraints[]
     */
    public $constraints;

    /**
     * @description The name of the database to which the object in the destination instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $destinationOwnerDBName;

    /**
     * @description The error message returned if initial schema synchronization failed.
     *
     * @example DTS-1020042 Execute sql error sql: Table \\"customer\\" already exists
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The schema of the object.
     *
     * @example CREATE TABLE `dtstestdata`.`customer` (\\n`customer_id`  int(10) unsigned   auto_increment  COMMENT \\"\\"   NOT NULL   , \\n`customer_title`  varchar(100)  CHARSET `utf8` COLLATE `utf8_general_ci`    COMMENT \\"\\"   NOT NULL   , \\n`customer_company1216`  varchar(40)  CHARSET `utf8` COLLATE `utf8_general_ci`    COMMENT \\"\\"   NOT NULL   , \\n`submission_date1216`  date     COMMENT \\"\\"   NULL   \\n, PRIMARY KEY (`customer_id`)) engine=InnoDB AUTO_INCREMENT=200001 DEFAULT CHARSET=`utf8` DEFAULT COLLATE `utf8_general_ci` ROW_FORMAT= Dynamic comment = \\"\\" ;\\n
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
     * @description The type of the object. Valid values:
     *
     **Table**, **Constraint**, **Index**, **View**, **Materialize View**, **Type**, **Synonym**, **Trigger**, **Function**, **Procedure**, **Package**, **Default**, **Rule**, **PlanGuide**, and **Sequence**.
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
     * @description The status of initial schema synchronization. Valid values:
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
        'constraints'            => 'Constraints',
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
        if (null !== $this->constraints) {
            $res['Constraints'] = [];
            if (null !== $this->constraints && \is_array($this->constraints)) {
                $n = 0;
                foreach ($this->constraints as $item) {
                    $res['Constraints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return structureInitializationDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Constraints'])) {
            if (!empty($map['Constraints'])) {
                $model->constraints = [];
                $n                  = 0;
                foreach ($map['Constraints'] as $item) {
                    $model->constraints[$n++] = null !== $item ? constraints::fromMap($item) : $item;
                }
            }
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
