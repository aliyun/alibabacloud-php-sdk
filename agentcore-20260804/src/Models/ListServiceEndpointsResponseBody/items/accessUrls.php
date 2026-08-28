<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody\items;

use AlibabaCloud\Dara\Model;

class accessUrls extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'accessType' => 'accessType',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['accessType'] = $this->accessType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['accessType'])) {
            $model->accessType = $map['accessType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
