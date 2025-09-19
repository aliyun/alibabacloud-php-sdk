<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathWhitelistResponseBody;

use AlibabaCloud\Dara\Model;

class attackPathWhitelistList extends Model
{
    /**
     * @var string
     */
    public $attackPathWhitelistId;

    /**
     * @var int
     */
    public $lastModifiedTimestamp;

    /**
     * @var string
     */
    public $pathName;

    /**
     * @var string
     */
    public $pathType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $whitelistName;

    /**
     * @var string
     */
    public $whitelistType;
    protected $_name = [
        'attackPathWhitelistId' => 'AttackPathWhitelistId',
        'lastModifiedTimestamp' => 'LastModifiedTimestamp',
        'pathName' => 'PathName',
        'pathType' => 'PathType',
        'remark' => 'Remark',
        'whitelistName' => 'WhitelistName',
        'whitelistType' => 'WhitelistType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathWhitelistId) {
            $res['AttackPathWhitelistId'] = $this->attackPathWhitelistId;
        }

        if (null !== $this->lastModifiedTimestamp) {
            $res['LastModifiedTimestamp'] = $this->lastModifiedTimestamp;
        }

        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }

        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->whitelistName) {
            $res['WhitelistName'] = $this->whitelistName;
        }

        if (null !== $this->whitelistType) {
            $res['WhitelistType'] = $this->whitelistType;
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
        if (isset($map['AttackPathWhitelistId'])) {
            $model->attackPathWhitelistId = $map['AttackPathWhitelistId'];
        }

        if (isset($map['LastModifiedTimestamp'])) {
            $model->lastModifiedTimestamp = $map['LastModifiedTimestamp'];
        }

        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }

        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['WhitelistName'])) {
            $model->whitelistName = $map['WhitelistName'];
        }

        if (isset($map['WhitelistType'])) {
            $model->whitelistType = $map['WhitelistType'];
        }

        return $model;
    }
}
