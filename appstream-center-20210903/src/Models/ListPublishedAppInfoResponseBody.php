<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListPublishedAppInfoResponseBody\appModels;

class ListPublishedAppInfoResponseBody extends Model
{
    /**
     * @var appModels[]
     */
    public $appModels;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appModels' => 'AppModels',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->appModels)) {
            Model::validateArray($this->appModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appModels) {
            if (\is_array($this->appModels)) {
                $res['AppModels'] = [];
                $n1 = 0;
                foreach ($this->appModels as $item1) {
                    $res['AppModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AppModels'])) {
            if (!empty($map['AppModels'])) {
                $model->appModels = [];
                $n1 = 0;
                foreach ($map['AppModels'] as $item1) {
                    $model->appModels[$n1] = appModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
