<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ExportOASRequest extends Model
{
    /**
     * @description The APIs that you want to export.
     *
     * @var string[]
     */
    public $apiIdList;

    /**
     * @description The exported format:
     *
     *   json
     *   yaml
     *
     * @example yaml
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @description The API group ID.
     *
     * @example 42925e7f5209438186d5560239af5xxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The OAS version. Valid values:
     *
     *   **oas2**
     *   **oas3**
     *
     * @example oas2
     *
     * @var string
     */
    public $oasVersion;

    /**
     * @description The number of pages in which you want to export the APIs.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The environment to which the API is published. Valid values:
     *
     *   **RELEASE**: the production environment
     *   **PRE**: the pre-release environment
     *   **TEST**: the test environment
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description Specifies whether to export API Gateway extensions at the same time.
     *
     * @example true
     *
     * @var bool
     */
    public $withXExtensions;
    protected $_name = [
        'apiIdList'       => 'ApiIdList',
        'dataFormat'      => 'DataFormat',
        'groupId'         => 'GroupId',
        'oasVersion'      => 'OasVersion',
        'pageNumber'      => 'PageNumber',
        'securityToken'   => 'SecurityToken',
        'stageName'       => 'StageName',
        'withXExtensions' => 'WithXExtensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiIdList) {
            $res['ApiIdList'] = $this->apiIdList;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->oasVersion) {
            $res['OasVersion'] = $this->oasVersion;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->withXExtensions) {
            $res['WithXExtensions'] = $this->withXExtensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportOASRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiIdList'])) {
            if (!empty($map['ApiIdList'])) {
                $model->apiIdList = $map['ApiIdList'];
            }
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OasVersion'])) {
            $model->oasVersion = $map['OasVersion'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['WithXExtensions'])) {
            $model->withXExtensions = $map['WithXExtensions'];
        }

        return $model;
    }
}
