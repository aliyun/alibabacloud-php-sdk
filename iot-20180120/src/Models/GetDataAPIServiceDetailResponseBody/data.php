<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data\sqlTemplateDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example /device/getDeviceCountByStatus
     *
     * @var string
     */
    public $apiPath;

    /**
     * @example acs:iot:*:127103983461****:serveapi/device/getDeviceCountByStatus2
     *
     * @var string
     */
    public $apiSrn;

    /**
     * @example 1557839468865
     *
     * @var int
     */
    public $createTime;

    /**
     * @example JSON
     *
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
     * @example 1557839468865
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @example GET/POST
     *
     * @var string
     */
    public $requestMethod;

    /**
     * @example HTTPS
     *
     * @var string
     */
    public $requestProtocol;

    /**
     * @var sqlTemplateDTO
     */
    public $sqlTemplateDTO;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
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
        'sqlTemplateDTO'  => 'SqlTemplateDTO',
        'status'          => 'Status',
    ];

    public function validate()
    {
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
        if (null !== $this->sqlTemplateDTO) {
            $res['SqlTemplateDTO'] = null !== $this->sqlTemplateDTO ? $this->sqlTemplateDTO->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['SqlTemplateDTO'])) {
            $model->sqlTemplateDTO = sqlTemplateDTO::fromMap($map['SqlTemplateDTO']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
