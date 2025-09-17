<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;

class UpdateResourceRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $body;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'body' => 'body',
        'clientToken' => 'clientToken',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['body'] = [];
                foreach ($this->body as $key1 => $value1) {
                    $res['body'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                foreach ($map['body'] as $key1 => $value1) {
                    $model->body[$key1] = $value1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
