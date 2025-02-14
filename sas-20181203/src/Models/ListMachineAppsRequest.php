<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListMachineAppsRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $appRegionId;
    /**
     * @var string
     */
    public $authVersion;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $resourceDirectoryUid;
    protected $_name = [
        'appId'                => 'AppId',
        'appName'              => 'AppName',
        'appRegionId'          => 'AppRegionId',
        'authVersion'          => 'AuthVersion',
        'currentPage'          => 'CurrentPage',
        'lang'                 => 'Lang',
        'pageSize'             => 'PageSize',
        'resourceDirectoryUid' => 'ResourceDirectoryUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appRegionId) {
            $res['AppRegionId'] = $this->appRegionId;
        }

        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceDirectoryUid) {
            $res['ResourceDirectoryUid'] = $this->resourceDirectoryUid;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppRegionId'])) {
            $model->appRegionId = $map['AppRegionId'];
        }

        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceDirectoryUid'])) {
            $model->resourceDirectoryUid = $map['ResourceDirectoryUid'];
        }

        return $model;
    }
}
