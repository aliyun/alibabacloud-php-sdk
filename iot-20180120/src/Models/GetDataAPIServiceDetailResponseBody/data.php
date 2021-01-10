<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data\sqlTemplateDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $apiSrn;

    /**
     * @var sqlTemplateDTO
     */
    public $sqlTemplateDTO;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $createTime;

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
    public $dateFormat;

    /**
     * @var string
     */
    public $requestProtocol;

    /**
     * @var string
     */
    public $apiPath;
    protected $_name = [
        'displayName'     => 'DisplayName',
        'status'          => 'Status',
        'apiSrn'          => 'ApiSrn',
        'sqlTemplateDTO'  => 'SqlTemplateDTO',
        'description'     => 'Description',
        'createTime'      => 'CreateTime',
        'lastUpdateTime'  => 'LastUpdateTime',
        'requestMethod'   => 'RequestMethod',
        'dateFormat'      => 'DateFormat',
        'requestProtocol' => 'RequestProtocol',
        'apiPath'         => 'ApiPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->apiSrn) {
            $res['ApiSrn'] = $this->apiSrn;
        }
        if (null !== $this->sqlTemplateDTO) {
            $res['SqlTemplateDTO'] = null !== $this->sqlTemplateDTO ? $this->sqlTemplateDTO->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->dateFormat) {
            $res['DateFormat'] = $this->dateFormat;
        }
        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ApiSrn'])) {
            $model->apiSrn = $map['ApiSrn'];
        }
        if (isset($map['SqlTemplateDTO'])) {
            $model->sqlTemplateDTO = sqlTemplateDTO::fromMap($map['SqlTemplateDTO']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['DateFormat'])) {
            $model->dateFormat = $map['DateFormat'];
        }
        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }

        return $model;
    }
}
