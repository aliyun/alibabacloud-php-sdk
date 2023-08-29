<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMdsUpgradeTaskDetailResponseBody\resultContent\data\content;

use AlibabaCloud\Tea\Model;

class whitelist extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $whiteListCount;

    /**
     * @var string
     */
    public $whiteListName;
    protected $_name = [
        'appCode'        => 'AppCode',
        'business'       => 'Business',
        'gmtModified'    => 'GmtModified',
        'id'             => 'Id',
        'idType'         => 'IdType',
        'platform'       => 'Platform',
        'status'         => 'Status',
        'whiteListCount' => 'WhiteListCount',
        'whiteListName'  => 'WhiteListName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->whiteListCount) {
            $res['WhiteListCount'] = $this->whiteListCount;
        }
        if (null !== $this->whiteListName) {
            $res['WhiteListName'] = $this->whiteListName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whitelist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WhiteListCount'])) {
            $model->whiteListCount = $map['WhiteListCount'];
        }
        if (isset($map['WhiteListName'])) {
            $model->whiteListName = $map['WhiteListName'];
        }

        return $model;
    }
}
