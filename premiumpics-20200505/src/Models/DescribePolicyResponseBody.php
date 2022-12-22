<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DescribePolicyResponseBody extends Model
{
    /**
     * @example LTAIAOUYgRDRcA7g
     *
     * @var string
     */
    public $accessId;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAyMi0xMS0wMlQxMDoxOTowMS44NjJaIiwiY29uZGl0aW9ucyI6W1siZXEiLCIka2V5IiwiNzc0MF8xNDcyMTUyMjY3OTI2MDYwXzg2ZTdkODZlZDk2MDQ2NWM4YWZiMTVjMWQ3ODExMzc5Il1dfQ==
     *
     * @var string
     */
    public $encodedPolicy;

    /**
     * @example 1640314850225
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example design/design/1998855314930043/1667528047548
     *
     * @var string
     */
    public $fileDir;

    /**
     * @example rm-uf6kek7cfqn3095zy.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example F7D17E93-12E9-5DB6-9BE3-821FC8C63EDD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example TSoPHNjbvr+cYzPAiQFf0K5ZiCU=
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'      => 'AccessId',
        'encodedPolicy' => 'EncodedPolicy',
        'expireTime'    => 'ExpireTime',
        'fileDir'       => 'FileDir',
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
     * @return DescribePolicyResponseBody
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
