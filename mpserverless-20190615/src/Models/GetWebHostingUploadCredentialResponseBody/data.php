<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingUploadCredentialResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example STS.NUcPHyHQr2xQ6zAe5ybi*****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example fbpsbvmo-154159039388***-static.oss-cn-zhangjiakou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example 1590460358
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example /
     *
     * @var string
     */
    public $filePath;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAyMC0wNS0yNlQwNjozMjoxOC43NTZaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLHsia2V5IjoiMGUxNmJiMTItMTRhZi00NjM1LWIyNGMtNWFjMWE5YTdiYjlmL2Zvcm1hdC5qc29uIn1dfQ==
     *
     * @var string
     */
    public $policy;

    /**
     * @example CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv
     *
     * @var string
     */
    public $securityToken;

    /**
     * @example w7ke9GsiFjb2bR7bQNOOTk4nlbA
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'endpoint'      => 'Endpoint',
        'expiredTime'   => 'ExpiredTime',
        'filePath'      => 'FilePath',
        'policy'        => 'Policy',
        'securityToken' => 'SecurityToken',
        'signature'     => 'Signature',
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
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
