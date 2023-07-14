<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemAttachmentCreatemetaResponseBody;

use AlibabaCloud\Tea\Model;

class uploadInfo extends Model
{
    /**
     * @example xxxxxxx
     *
     * @var string
     */
    public $accessid;

    /**
     * @example ddd/dddd
     *
     * @var string
     */
    public $dir;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $host;

    /**
     * @example xxxxxxx
     *
     * @var string
     */
    public $policy;

    /**
     * @example xdWcrl/yTmIUA0kE7a3B0Ox4Vu8=
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessid'  => 'accessid',
        'dir'       => 'dir',
        'host'      => 'host',
        'policy'    => 'policy',
        'signature' => 'signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessid) {
            $res['accessid'] = $this->accessid;
        }
        if (null !== $this->dir) {
            $res['dir'] = $this->dir;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessid'])) {
            $model->accessid = $map['accessid'];
        }
        if (isset($map['dir'])) {
            $model->dir = $map['dir'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        return $model;
    }
}
