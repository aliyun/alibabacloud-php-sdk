<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListCrawlerTypesResponseBody extends Model
{
    /**
     * @var CrawlerType[]
     */
    public $crawlerTypes;

    /**
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'crawlerTypes' => 'CrawlerTypes',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->crawlerTypes) {
            $res['CrawlerTypes'] = [];
            if (null !== $this->crawlerTypes && \is_array($this->crawlerTypes)) {
                $n = 0;
                foreach ($this->crawlerTypes as $item) {
                    $res['CrawlerTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListCrawlerTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrawlerTypes'])) {
            if (!empty($map['CrawlerTypes'])) {
                $model->crawlerTypes = [];
                $n = 0;
                foreach ($map['CrawlerTypes'] as $item) {
                    $model->crawlerTypes[$n++] = null !== $item ? CrawlerType::fromMap($item) : $item;
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
