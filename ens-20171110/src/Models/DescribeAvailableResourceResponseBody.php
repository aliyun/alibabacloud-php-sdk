<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponseBody\images;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponseBody\supportResources;

class DescribeAvailableResourceResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var images
     */
    public $images;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var supportResources
     */
    public $supportResources;
    protected $_name = [
        'code' => 'Code',
        'images' => 'Images',
        'requestId' => 'RequestId',
        'supportResources' => 'SupportResources',
    ];

    public function validate()
    {
        if (null !== $this->images) {
            $this->images->validate();
        }
        if (null !== $this->supportResources) {
            $this->supportResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toArray($noStream) : $this->images;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportResources) {
            $res['SupportResources'] = null !== $this->supportResources ? $this->supportResources->toArray($noStream) : $this->supportResources;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportResources'])) {
            $model->supportResources = supportResources::fromMap($map['SupportResources']);
        }

        return $model;
    }
}
