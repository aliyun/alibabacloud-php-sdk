<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetJobDataUploadParamsResponseBody;

use AlibabaCloud\Tea\Model;

class uploadParams extends Model
{
    /**
     * @var string
     */
    public $signature;

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
    public $folder;

    /**
     * @var string
     */
    public $accessId;

    /**
     * @var int
     */
    public $expire;
    protected $_name = [
        'signature' => 'Signature',
        'host'      => 'Host',
        'policy'    => 'Policy',
        'folder'    => 'Folder',
        'accessId'  => 'AccessId',
        'expire'    => 'Expire',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->folder) {
            $res['Folder'] = $this->folder;
        }
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Folder'])) {
            $model->folder = $map['Folder'];
        }
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        return $model;
    }
}
