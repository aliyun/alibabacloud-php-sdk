<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param\cronClearItemList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The purpose or objective of the data change. This reduces unnecessary communication.
     *
     * @example test
     *
     * @var string
     */
    public $classify;

    /**
     * @description The stakeholders of this operation. All stakeholders can view the ticket details and assist in the approval process. Irrelevant users other than Data Management (DMS) administrators and database administrators (DBAs) are not allowed to view the ticket details.
     *
     * @var cronClearItemList[]
     */
    public $cronClearItemList;

    /**
     * @description The name of the field.
     *
     * @example 0 0 2 * * ?
     *
     * @var string
     */
    public $cronFormat;

    /**
     * @description The ID of the database. You can call the [SearchDatabases](~~141876~~) operation to query the ID of the database.
     *
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @description The key of the attachment for the ticket. The attachment provides more instructions for this operation.
     *
     * You can call the [GetUserUploadFileJob](~~206069~~) operation to query the key of the attachment.
     * @example 4
     *
     * @var int
     */
    public $durationHour;

    /**
     * @description The name of the table. You can call the [ListTables](~~141878~~) operation to query the name of the table.
     *
     * @example true
     *
     * @var bool
     */
    public $specifyDuration;
    protected $_name = [
        'classify'          => 'Classify',
        'cronClearItemList' => 'CronClearItemList',
        'cronFormat'        => 'CronFormat',
        'dbItemList'        => 'DbItemList',
        'durationHour'      => 'DurationHour',
        'specifyDuration'   => 'specifyDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->cronClearItemList) {
            $res['CronClearItemList'] = [];
            if (null !== $this->cronClearItemList && \is_array($this->cronClearItemList)) {
                $n = 0;
                foreach ($this->cronClearItemList as $item) {
                    $res['CronClearItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cronFormat) {
            $res['CronFormat'] = $this->cronFormat;
        }
        if (null !== $this->dbItemList) {
            $res['DbItemList'] = [];
            if (null !== $this->dbItemList && \is_array($this->dbItemList)) {
                $n = 0;
                foreach ($this->dbItemList as $item) {
                    $res['DbItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->durationHour) {
            $res['DurationHour'] = $this->durationHour;
        }
        if (null !== $this->specifyDuration) {
            $res['specifyDuration'] = $this->specifyDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['CronClearItemList'])) {
            if (!empty($map['CronClearItemList'])) {
                $model->cronClearItemList = [];
                $n                        = 0;
                foreach ($map['CronClearItemList'] as $item) {
                    $model->cronClearItemList[$n++] = null !== $item ? cronClearItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CronFormat'])) {
            $model->cronFormat = $map['CronFormat'];
        }
        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n                 = 0;
                foreach ($map['DbItemList'] as $item) {
                    $model->dbItemList[$n++] = null !== $item ? dbItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DurationHour'])) {
            $model->durationHour = $map['DurationHour'];
        }
        if (isset($map['specifyDuration'])) {
            $model->specifyDuration = $map['specifyDuration'];
        }

        return $model;
    }
}
