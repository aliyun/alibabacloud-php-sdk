<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataTrackOrderRequest;

use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The ID of the database. You can call the [SearchDatabases](https://help.aliyun.com/document_detail/141876.html) operation to query the ID of the database.
     *
     * > You can call this operation to create a data tracking ticket for only physical databases. This operation is not applicable to logical databases.
     *
     * This parameter is required.
     *
     * @example 123***
     *
     * @var string
     */
    public $dbId;

    /**
     * @description The end time of the time range in which you want to track data operations. The time must be in the yyyy-MM-dd HH:mm:ss format.
     *
     * This parameter is required.
     *
     * @example 2023-04-23 10:00:00
     *
     * @var string
     */
    public $jobEndTime;

    /**
     * @description The start time of the time range in which you want to track data operations. The time must be in the yyyy-MM-dd HH:mm:ss format.
     *
     * This parameter is required.
     *
     * @example 2023-04-23 00:00:00
     *
     * @var string
     */
    public $jobStartTime;

    /**
     * @description The names of the tables for which you want to track data operations.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $tableNames;

    /**
     * @description The types of data operations that you want to track.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $trackTypes;
    protected $_name = [
        'dbId' => 'DbId',
        'jobEndTime' => 'JobEndTime',
        'jobStartTime' => 'JobStartTime',
        'tableNames' => 'TableNames',
        'trackTypes' => 'TrackTypes',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->jobEndTime) {
            $res['JobEndTime'] = $this->jobEndTime;
        }
        if (null !== $this->jobStartTime) {
            $res['JobStartTime'] = $this->jobStartTime;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }
        if (null !== $this->trackTypes) {
            $res['TrackTypes'] = $this->trackTypes;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['JobEndTime'])) {
            $model->jobEndTime = $map['JobEndTime'];
        }
        if (isset($map['JobStartTime'])) {
            $model->jobStartTime = $map['JobStartTime'];
        }
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = $map['TableNames'];
            }
        }
        if (isset($map['TrackTypes'])) {
            if (!empty($map['TrackTypes'])) {
                $model->trackTypes = $map['TrackTypes'];
            }
        }

        return $model;
    }
}
