<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apiPath;

    /**
     * @var string
     */
    public $apiSrn;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dateFormat;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $requestMethod;

    /**
     * @var string
     */
    public $requestProtocol;

    /**
     * @var int
     */
    public $status;

    /**
     * @var sqlTemplateDTO
     */
    public $sqlTemplateDTO;
    protected $_name = [
        'apiPath'         => 'ApiPath',
        'apiSrn'          => 'ApiSrn',
        'createTime'      => 'CreateTime',
        'dateFormat'      => 'DateFormat',
        'description'     => 'Description',
        'displayName'     => 'DisplayName',
        'lastUpdateTime'  => 'LastUpdateTime',
        'requestMethod'   => 'RequestMethod',
        'requestProtocol' => 'RequestProtocol',
        'status'          => 'Status',
        'sqlTemplateDTO'  => 'SqlTemplateDTO',
    ];

    public function validate()
    {
        Model::validateRequired('apiPath', $this->apiPath, true);
        Model::validateRequired('apiSrn', $this->apiSrn, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('dateFormat', $this->dateFormat, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('lastUpdateTime', $this->lastUpdateTime, true);
        Model::validateRequired('requestMethod', $this->requestMethod, true);
        Model::validateRequired('requestProtocol', $this->requestProtocol, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('sqlTemplateDTO', $this->sqlTemplateDTO, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->apiSrn) {
            $res['ApiSrn'] = $this->apiSrn;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dateFormat) {
            $res['DateFormat'] = $this->dateFormat;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sqlTemplateDTO) {
            $res['SqlTemplateDTO'] = null !== $this->sqlTemplateDTO ? $this->sqlTemplateDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['ApiSrn'])) {
            $model->apiSrn = $map['ApiSrn'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DateFormat'])) {
            $model->dateFormat = $map['DateFormat'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SqlTemplateDTO'])) {
            $model->sqlTemplateDTO = sqlTemplateDTO::fromMap($map['SqlTemplateDTO']);
        }

        return $model;
    }
}
