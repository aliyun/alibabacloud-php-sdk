<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreateRplInspectionTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dstDb;

    /**
     * @var string
     */
    public $dstPassword;

    /**
     * @var string
     */
    public $dstResId;

    /**
     * @var string
     */
    public $dstUserName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slinkTaskId;

    /**
     * @var string
     */
    public $srcPassword;

    /**
     * @var string
     */
    public $srcUserName;
    protected $_name = [
        'dstDb' => 'DstDb',
        'dstPassword' => 'DstPassword',
        'dstResId' => 'DstResId',
        'dstUserName' => 'DstUserName',
        'regionId' => 'RegionId',
        'slinkTaskId' => 'SlinkTaskId',
        'srcPassword' => 'SrcPassword',
        'srcUserName' => 'SrcUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstDb) {
            $res['DstDb'] = $this->dstDb;
        }

        if (null !== $this->dstPassword) {
            $res['DstPassword'] = $this->dstPassword;
        }

        if (null !== $this->dstResId) {
            $res['DstResId'] = $this->dstResId;
        }

        if (null !== $this->dstUserName) {
            $res['DstUserName'] = $this->dstUserName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->slinkTaskId) {
            $res['SlinkTaskId'] = $this->slinkTaskId;
        }

        if (null !== $this->srcPassword) {
            $res['SrcPassword'] = $this->srcPassword;
        }

        if (null !== $this->srcUserName) {
            $res['SrcUserName'] = $this->srcUserName;
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
        if (isset($map['DstDb'])) {
            $model->dstDb = $map['DstDb'];
        }

        if (isset($map['DstPassword'])) {
            $model->dstPassword = $map['DstPassword'];
        }

        if (isset($map['DstResId'])) {
            $model->dstResId = $map['DstResId'];
        }

        if (isset($map['DstUserName'])) {
            $model->dstUserName = $map['DstUserName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SlinkTaskId'])) {
            $model->slinkTaskId = $map['SlinkTaskId'];
        }

        if (isset($map['SrcPassword'])) {
            $model->srcPassword = $map['SrcPassword'];
        }

        if (isset($map['SrcUserName'])) {
            $model->srcUserName = $map['SrcUserName'];
        }

        return $model;
    }
}
