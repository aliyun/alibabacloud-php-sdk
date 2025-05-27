<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class AddUserSourceLogConfigRequest extends Model
{
    /**
     * @var int
     */
    public $deleted;

    /**
     * @var string
     */
    public $disPlayLine;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceLogCode;

    /**
     * @var string
     */
    public $sourceLogInfo;

    /**
     * @var string
     */
    public $sourceProdCode;

    /**
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'deleted' => 'Deleted',
        'disPlayLine' => 'DisPlayLine',
        'regionId' => 'RegionId',
        'sourceLogCode' => 'SourceLogCode',
        'sourceLogInfo' => 'SourceLogInfo',
        'sourceProdCode' => 'SourceProdCode',
        'subUserId' => 'SubUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->disPlayLine) {
            $res['DisPlayLine'] = $this->disPlayLine;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceLogCode) {
            $res['SourceLogCode'] = $this->sourceLogCode;
        }

        if (null !== $this->sourceLogInfo) {
            $res['SourceLogInfo'] = $this->sourceLogInfo;
        }

        if (null !== $this->sourceProdCode) {
            $res['SourceProdCode'] = $this->sourceProdCode;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
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
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['DisPlayLine'])) {
            $model->disPlayLine = $map['DisPlayLine'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceLogCode'])) {
            $model->sourceLogCode = $map['SourceLogCode'];
        }

        if (isset($map['SourceLogInfo'])) {
            $model->sourceLogInfo = $map['SourceLogInfo'];
        }

        if (isset($map['SourceProdCode'])) {
            $model->sourceProdCode = $map['SourceProdCode'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
