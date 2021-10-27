<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeUploadInfoResponse extends Model
{
    /**
     * @var string
     */
    public $accessid;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $folder;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessid'  => 'Accessid',
        'expire'    => 'Expire',
        'folder'    => 'Folder',
        'host'      => 'Host',
        'policy'    => 'Policy',
        'requestId' => 'RequestId',
        'signature' => 'Signature',
    ];

    public function validate()
    {
        Model::validateRequired('accessid', $this->accessid, true);
        Model::validateRequired('expire', $this->expire, true);
        Model::validateRequired('folder', $this->folder, true);
        Model::validateRequired('host', $this->host, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('signature', $this->signature, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->folder) {
            $res['Folder'] = $this->folder;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
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
     * @return DescribeUploadInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Folder'])) {
            $model->folder = $map['Folder'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
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
