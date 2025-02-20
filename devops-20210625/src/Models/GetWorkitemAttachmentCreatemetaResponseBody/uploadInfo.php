<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemAttachmentCreatemetaResponseBody;

use AlibabaCloud\Dara\Model;

class uploadInfo extends Model
{
    /**
     * @var string
     */
    public $accessid;
    /**
     * @var string
     */
    public $dir;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
