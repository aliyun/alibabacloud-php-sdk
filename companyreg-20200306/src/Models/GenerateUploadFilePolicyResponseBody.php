<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadFilePolicyResponseBody extends Model
{
    /**
     * @description OSSAccessKeyId
     *
     * @example hObpgEXoca42qH3V
     *
     * @var string
     */
    public $accessId;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAyMS0xMi0wNlQwNjoxOTowMi40MjdaIiwiY29uZGl0aW9ucyI6W1siZXEiLCIkYnVja2V0IiwibXNlYS1jYWlzaHVpIl1dfQ==
     *
     * @var string
     */
    public $encodedPolicy;

    /**
     * @example 1638169824405
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example company_apply_card/company_change_city/1577930895198750/1638170049657
     *
     * @var string
     */
    public $fileDir;

    /**
     * @example https://
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description OSS Endpoint。
     *
     * @example //companyapply.oss-cn-zhangjiakou.aliyuncs.com/
     *
     * @var string
     */
    public $host;

    /**
     * @example EB809CAB-82F7-5843-A42F-356770CD4914
     *
     * @var string
     */
    public $requestId;

    /**
     * @example jykxhmskIF24sLlxc1GafU/eQMU=
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'      => 'AccessId',
        'encodedPolicy' => 'EncodedPolicy',
        'expireTime'    => 'ExpireTime',
        'fileDir'       => 'FileDir',
        'fileUrl'       => 'FileUrl',
        'host'          => 'Host',
        'requestId'     => 'RequestId',
        'signature'     => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->encodedPolicy) {
            $res['EncodedPolicy'] = $this->encodedPolicy;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->fileDir) {
            $res['FileDir'] = $this->fileDir;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUploadFilePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['EncodedPolicy'])) {
            $model->encodedPolicy = $map['EncodedPolicy'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FileDir'])) {
            $model->fileDir = $map['FileDir'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
