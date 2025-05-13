<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class RumDnsResponse extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'domain' => 'domain',
        'message' => 'message',
        'result' => 'result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
