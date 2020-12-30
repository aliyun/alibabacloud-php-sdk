<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class fsStats extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $readsMerged;

    /**
     * @var bool
     */
    public $hasInodes;

    /**
     * @var int
     */
    public $readsCompleted;

    /**
     * @var int
     */
    public $writesMerged;

    /**
     * @var int
     */
    public $inodesFree;

    /**
     * @var int
     */
    public $available;

    /**
     * @var int
     */
    public $usage;

    /**
     * @var int
     */
    public $inodes;

    /**
     * @var int
     */
    public $baseUsage;

    /**
     * @var int
     */
    public $sectorsRead;

    /**
     * @var int
     */
    public $writeTime;

    /**
     * @var int
     */
    public $sectorsWritten;

    /**
     * @var int
     */
    public $readTime;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $device;

    /**
     * @var int
     */
    public $writesCompleted;

    /**
     * @var int
     */
    public $ioTime;

    /**
     * @var int
     */
    public $weightedIoTime;

    /**
     * @var int
     */
    public $ioInProgress;
    protected $_name = [
        'type'            => 'Type',
        'readsMerged'     => 'ReadsMerged',
        'hasInodes'       => 'HasInodes',
        'readsCompleted'  => 'ReadsCompleted',
        'writesMerged'    => 'WritesMerged',
        'inodesFree'      => 'InodesFree',
        'available'       => 'Available',
        'usage'           => 'Usage',
        'inodes'          => 'Inodes',
        'baseUsage'       => 'BaseUsage',
        'sectorsRead'     => 'SectorsRead',
        'writeTime'       => 'WriteTime',
        'sectorsWritten'  => 'SectorsWritten',
        'readTime'        => 'ReadTime',
        'limit'           => 'Limit',
        'device'          => 'Device',
        'writesCompleted' => 'WritesCompleted',
        'ioTime'          => 'IoTime',
        'weightedIoTime'  => 'WeightedIoTime',
        'ioInProgress'    => 'IoInProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->readsMerged) {
            $res['ReadsMerged'] = $this->readsMerged;
        }
        if (null !== $this->hasInodes) {
            $res['HasInodes'] = $this->hasInodes;
        }
        if (null !== $this->readsCompleted) {
            $res['ReadsCompleted'] = $this->readsCompleted;
        }
        if (null !== $this->writesMerged) {
            $res['WritesMerged'] = $this->writesMerged;
        }
        if (null !== $this->inodesFree) {
            $res['InodesFree'] = $this->inodesFree;
        }
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->inodes) {
            $res['Inodes'] = $this->inodes;
        }
        if (null !== $this->baseUsage) {
            $res['BaseUsage'] = $this->baseUsage;
        }
        if (null !== $this->sectorsRead) {
            $res['SectorsRead'] = $this->sectorsRead;
        }
        if (null !== $this->writeTime) {
            $res['WriteTime'] = $this->writeTime;
        }
        if (null !== $this->sectorsWritten) {
            $res['SectorsWritten'] = $this->sectorsWritten;
        }
        if (null !== $this->readTime) {
            $res['ReadTime'] = $this->readTime;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->writesCompleted) {
            $res['WritesCompleted'] = $this->writesCompleted;
        }
        if (null !== $this->ioTime) {
            $res['IoTime'] = $this->ioTime;
        }
        if (null !== $this->weightedIoTime) {
            $res['WeightedIoTime'] = $this->weightedIoTime;
        }
        if (null !== $this->ioInProgress) {
            $res['IoInProgress'] = $this->ioInProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fsStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ReadsMerged'])) {
            $model->readsMerged = $map['ReadsMerged'];
        }
        if (isset($map['HasInodes'])) {
            $model->hasInodes = $map['HasInodes'];
        }
        if (isset($map['ReadsCompleted'])) {
            $model->readsCompleted = $map['ReadsCompleted'];
        }
        if (isset($map['WritesMerged'])) {
            $model->writesMerged = $map['WritesMerged'];
        }
        if (isset($map['InodesFree'])) {
            $model->inodesFree = $map['InodesFree'];
        }
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['Inodes'])) {
            $model->inodes = $map['Inodes'];
        }
        if (isset($map['BaseUsage'])) {
            $model->baseUsage = $map['BaseUsage'];
        }
        if (isset($map['SectorsRead'])) {
            $model->sectorsRead = $map['SectorsRead'];
        }
        if (isset($map['WriteTime'])) {
            $model->writeTime = $map['WriteTime'];
        }
        if (isset($map['SectorsWritten'])) {
            $model->sectorsWritten = $map['SectorsWritten'];
        }
        if (isset($map['ReadTime'])) {
            $model->readTime = $map['ReadTime'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['WritesCompleted'])) {
            $model->writesCompleted = $map['WritesCompleted'];
        }
        if (isset($map['IoTime'])) {
            $model->ioTime = $map['IoTime'];
        }
        if (isset($map['WeightedIoTime'])) {
            $model->weightedIoTime = $map['WeightedIoTime'];
        }
        if (isset($map['IoInProgress'])) {
            $model->ioInProgress = $map['IoInProgress'];
        }

        return $model;
    }
}
