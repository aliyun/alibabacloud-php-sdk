<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetAudioFileUploadParametersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example 1647313420
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example ccc-test/test-file.wav
     *
     * @var string
     */
    public $filePath;

    /**
     * @example https://ccc-v2-online.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAyMi0wNi0yOVQwMDoyOTowMC42NTRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiYXVkaW8vMTU3NzI0NzExNTQ5MDQwMS9seS1vbmxpbmUvMjAyMjA2MjkwNzI5MDAvIl1d****
     *
     * @var string
     */
    public $policy;

    /**
     * @example HIyClras8IcVlbTV7RIJWJbU****
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'expireTime'  => 'ExpireTime',
        'filePath'    => 'FilePath',
        'host'        => 'Host',
        'policy'      => 'Policy',
        'signature'   => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
