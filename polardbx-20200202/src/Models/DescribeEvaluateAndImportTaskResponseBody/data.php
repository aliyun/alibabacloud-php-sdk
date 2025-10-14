<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeEvaluateAndImportTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slinkDstDb;

    /**
     * @var string
     */
    public $slinkDstResId;

    /**
     * @var string
     */
    public $slinkDstUserName;

    /**
     * @var string
     */
    public $slinkSrcDb;

    /**
     * @var string
     */
    public $slinkSrcResId;

    /**
     * @var string
     */
    public $slinkSrcResType;

    /**
     * @var string
     */
    public $slinkSrcUserName;

    /**
     * @var string
     */
    public $slinkStage;

    /**
     * @var string
     */
    public $slinkStatus;

    /**
     * @var string
     */
    public $slinkTaskDesc;

    /**
     * @var string
     */
    public $slinkTaskId;

    /**
     * @var string
     */
    public $slinkType;
    protected $_name = [
        'bid' => 'Bid',
        'context' => 'Context',
        'creator' => 'Creator',
        'deleted' => 'Deleted',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'regionId' => 'RegionId',
        'slinkDstDb' => 'SlinkDstDb',
        'slinkDstResId' => 'SlinkDstResId',
        'slinkDstUserName' => 'SlinkDstUserName',
        'slinkSrcDb' => 'SlinkSrcDb',
        'slinkSrcResId' => 'SlinkSrcResId',
        'slinkSrcResType' => 'SlinkSrcResType',
        'slinkSrcUserName' => 'SlinkSrcUserName',
        'slinkStage' => 'SlinkStage',
        'slinkStatus' => 'SlinkStatus',
        'slinkTaskDesc' => 'SlinkTaskDesc',
        'slinkTaskId' => 'SlinkTaskId',
        'slinkType' => 'SlinkType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }

        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->slinkDstDb) {
            $res['SlinkDstDb'] = $this->slinkDstDb;
        }

        if (null !== $this->slinkDstResId) {
            $res['SlinkDstResId'] = $this->slinkDstResId;
        }

        if (null !== $this->slinkDstUserName) {
            $res['SlinkDstUserName'] = $this->slinkDstUserName;
        }

        if (null !== $this->slinkSrcDb) {
            $res['SlinkSrcDb'] = $this->slinkSrcDb;
        }

        if (null !== $this->slinkSrcResId) {
            $res['SlinkSrcResId'] = $this->slinkSrcResId;
        }

        if (null !== $this->slinkSrcResType) {
            $res['SlinkSrcResType'] = $this->slinkSrcResType;
        }

        if (null !== $this->slinkSrcUserName) {
            $res['SlinkSrcUserName'] = $this->slinkSrcUserName;
        }

        if (null !== $this->slinkStage) {
            $res['SlinkStage'] = $this->slinkStage;
        }

        if (null !== $this->slinkStatus) {
            $res['SlinkStatus'] = $this->slinkStatus;
        }

        if (null !== $this->slinkTaskDesc) {
            $res['SlinkTaskDesc'] = $this->slinkTaskDesc;
        }

        if (null !== $this->slinkTaskId) {
            $res['SlinkTaskId'] = $this->slinkTaskId;
        }

        if (null !== $this->slinkType) {
            $res['SlinkType'] = $this->slinkType;
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
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SlinkDstDb'])) {
            $model->slinkDstDb = $map['SlinkDstDb'];
        }

        if (isset($map['SlinkDstResId'])) {
            $model->slinkDstResId = $map['SlinkDstResId'];
        }

        if (isset($map['SlinkDstUserName'])) {
            $model->slinkDstUserName = $map['SlinkDstUserName'];
        }

        if (isset($map['SlinkSrcDb'])) {
            $model->slinkSrcDb = $map['SlinkSrcDb'];
        }

        if (isset($map['SlinkSrcResId'])) {
            $model->slinkSrcResId = $map['SlinkSrcResId'];
        }

        if (isset($map['SlinkSrcResType'])) {
            $model->slinkSrcResType = $map['SlinkSrcResType'];
        }

        if (isset($map['SlinkSrcUserName'])) {
            $model->slinkSrcUserName = $map['SlinkSrcUserName'];
        }

        if (isset($map['SlinkStage'])) {
            $model->slinkStage = $map['SlinkStage'];
        }

        if (isset($map['SlinkStatus'])) {
            $model->slinkStatus = $map['SlinkStatus'];
        }

        if (isset($map['SlinkTaskDesc'])) {
            $model->slinkTaskDesc = $map['SlinkTaskDesc'];
        }

        if (isset($map['SlinkTaskId'])) {
            $model->slinkTaskId = $map['SlinkTaskId'];
        }

        if (isset($map['SlinkType'])) {
            $model->slinkType = $map['SlinkType'];
        }

        return $model;
    }
}
