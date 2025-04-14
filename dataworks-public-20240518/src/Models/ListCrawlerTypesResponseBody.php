<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListCrawlerTypesResponseBody extends Model
{
    /**
     * @var CrawlerType[]
     */
    public $crawlerTypes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'crawlerTypes' => 'CrawlerTypes',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->crawlerTypes)) {
            Model::validateArray($this->crawlerTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crawlerTypes) {
            if (\is_array($this->crawlerTypes)) {
                $res['CrawlerTypes'] = [];
                $n1 = 0;
                foreach ($this->crawlerTypes as $item1) {
                    $res['CrawlerTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['CrawlerTypes'])) {
            if (!empty($map['CrawlerTypes'])) {
                $model->crawlerTypes = [];
                $n1 = 0;
                foreach ($map['CrawlerTypes'] as $item1) {
                    $model->crawlerTypes[$n1++] = CrawlerType::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
