<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListMachineAppsRequest extends Model
{
    /**
     * @description SAE application ID.
     *
     * @example 5b41f4bf-349f-4263-89b1-9234c034****
     *
     * @var string
     */
    public $appId;

    /**
     * @description SAE application name.
     *
     * @example agent-commprice-shop
     *
     * @var string
     */
    public $appName;

    /**
     * @description Region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $appRegionId;

    /**
     * @description The authorization version of the asset. Values:
     * - **6**: Anti-virus edition
     * - **5**: Advanced edition
     * - **3**: Enterprise edition
     * - **7**: Ultimate edition
     * - **10**: Value-added Service Edition
     *
     * @example 7
     *
     * @var string
     */
    public $authVersion;

    /**
     * @description The page number to display in a paginated query.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language type for request and response, default value is **zh**. Values:
     * - **zh**: Chinese
     * - **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The maximum number of items to display per page in a paginated query.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The UID of the resource directory.
     *
     * @example 123456
     *
     * @var int
     */
    public $resourceDirectoryUid;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appRegionId' => 'AppRegionId',
        'authVersion' => 'AuthVersion',
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'resourceDirectoryUid' => 'ResourceDirectoryUid',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListMachineAppsRequest
     */
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
