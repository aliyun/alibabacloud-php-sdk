<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsRequest\sorts;
use AlibabaCloud\Tea\Model;

class ListDocumentsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example d278629c-c687-4aa3-b044-4fe9b012e7ef
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example eyJ0YWJsZUlkIjoiY2Y2MTQxYjA5NDY0NDUxMzk5YjFjMTA5YTMxZWNkMzEiLCJ0b2tlbiI6IjAwMDAwMDAwMDAwNzAzNzcifQ==
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example EAF3C248-E123-441B-A545-B6CD02E98EED
     *
     * @var string
     */
    public $requestId;

    /**
     * @description schema id
     *
     * This parameter is required.
     * @example profile
     *
     * @var string
     */
    public $schemaId;

    /**
     * @var string
     */
    public $searchPattern;

    /**
     * @var sorts[]
     */
    public $sorts;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'nextPageToken' => 'NextPageToken',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'schemaId'      => 'SchemaId',
        'searchPattern' => 'SearchPattern',
        'sorts'         => 'Sorts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }
        if (null !== $this->searchPattern) {
            $res['SearchPattern'] = $this->searchPattern;
        }
        if (null !== $this->sorts) {
            $res['Sorts'] = [];
            if (null !== $this->sorts && \is_array($this->sorts)) {
                $n = 0;
                foreach ($this->sorts as $item) {
                    $res['Sorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDocumentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }
        if (isset($map['SearchPattern'])) {
            $model->searchPattern = $map['SearchPattern'];
        }
        if (isset($map['Sorts'])) {
            if (!empty($map['Sorts'])) {
                $model->sorts = [];
                $n            = 0;
                foreach ($map['Sorts'] as $item) {
                    $model->sorts[$n++] = null !== $item ? sorts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
