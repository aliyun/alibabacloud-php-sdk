<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models\GenerateUploadFilePolicyForPartnerResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example LTAI5tQPEXqDVu7794Bvw2xM
     *
     * @var string
     */
    public $accessId;

    /**
     * @example XXXXXXX
     *
     * @var string
     */
    public $encodedPolicy;

    /**
     * @example 1719112842
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example website_partner_leads/website/xxxxxx/xxxxxx
     *
     * @var string
     */
    public $fileDir;

    /**
     * @example //xx-xxx-partner.oss-cn-zhangjiakou.aliyuncs.com/
     *
     * @var string
     */
    public $host;

    /**
     * @example https://msea-website-partner.oss-cn-zhangjiakou.aliyuncs.com/website_xxxx_party_leads/website/xxxx/xxxx/2024/06/25/website_partner_third_party_leads_01?Expires=1719868413&OSSAccessKeyId=LTAI5tAnyDDDDD&Signature=XXXX
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @example qQb34p8lIXcSFtog2y0H08bC0OI=
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId' => 'AccessId',
        'encodedPolicy' => 'EncodedPolicy',
        'expireTime' => 'ExpireTime',
        'fileDir' => 'FileDir',
        'host' => 'Host',
        'ossUrl' => 'OssUrl',
        'signature' => 'Signature',
    ];

    public function validate() {}

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
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
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
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
