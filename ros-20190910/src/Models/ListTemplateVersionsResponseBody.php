<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateVersionsResponseBody\versions;

class ListTemplateVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'versions' => 'Versions',
    ];

    public function validate()
    {
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1++] = versions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
