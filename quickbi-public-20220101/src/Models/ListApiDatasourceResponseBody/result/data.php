<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListApiDatasourceResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0f2c3c6409be4dc0810f2a5785e816a8
     *
     * @var string
     */
    public $apiId;

    /**
     * @example {"key1":"value1"}
     *
     * @var string
     */
    public $body;

    /**
     * @example 0.39746094
     *
     * @var float
     */
    public $dataSize;

    /**
     * @example 2022-05-25 16:19:43
     *
     * @var string
     */
    public $dateUpdateTime;

    /**
     * @example 2022-05-25 16:19:43
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-05-25 16:19:43
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example REST_API_SYNC_0f2c3c6409be4dc0810f2a5785e816a8
     *
     * @var string
     */
    public $jobId;

    /**
     * @example [{"name":"token","value":"xxxxxxxxxxxx"},{"name":"pageSize","value":100}]
     *
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $showName;

    /**
     * @example 2
     *
     * @var int
     */
    public $statusType;
    protected $_name = [
        'apiId'          => 'ApiId',
        'body'           => 'Body',
        'dataSize'       => 'DataSize',
        'dateUpdateTime' => 'DateUpdateTime',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'jobId'          => 'JobId',
        'parameters'     => 'Parameters',
        'showName'       => 'ShowName',
        'statusType'     => 'StatusType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->dateUpdateTime) {
            $res['DateUpdateTime'] = $this->dateUpdateTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->statusType) {
            $res['StatusType'] = $this->statusType;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DateUpdateTime'])) {
            $model->dateUpdateTime = $map['DateUpdateTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['StatusType'])) {
            $model->statusType = $map['StatusType'];
        }

        return $model;
    }
}
