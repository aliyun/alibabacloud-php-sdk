<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeWhitelistsResponseBody\listWhitelistResult;

use AlibabaCloud\Tea\Model;

class whitelists extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $whiteListCount;

    /**
     * @var string
     */
    public $whiteListName;

    /**
     * @var string
     */
    public $whitelistType;
    protected $_name = [
        'appCode'        => 'AppCode',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'id'             => 'Id',
        'whiteListCount' => 'WhiteListCount',
        'whiteListName'  => 'WhiteListName',
        'whitelistType'  => 'WhitelistType',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->whiteListCount) {
            $res['WhiteListCount'] = $this->whiteListCount;
        }
        if (null !== $this->whiteListName) {
            $res['WhiteListName'] = $this->whiteListName;
        }
        if (null !== $this->whitelistType) {
            $res['WhitelistType'] = $this->whitelistType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whitelists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['WhiteListCount'])) {
            $model->whiteListCount = $map['WhiteListCount'];
        }
        if (isset($map['WhiteListName'])) {
            $model->whiteListName = $map['WhiteListName'];
        }
        if (isset($map['WhitelistType'])) {
            $model->whitelistType = $map['WhitelistType'];
        }

        return $model;
    }
}
