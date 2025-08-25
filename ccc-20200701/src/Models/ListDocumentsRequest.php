<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsRequest\sorts;

class ListDocumentsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
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
        'instanceId' => 'InstanceId',
        'nextPageToken' => 'NextPageToken',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'schemaId' => 'SchemaId',
        'searchPattern' => 'SearchPattern',
        'sorts' => 'Sorts',
    ];

    public function validate()
    {
        if (\is_array($this->sorts)) {
            Model::validateArray($this->sorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sorts)) {
                $res['Sorts'] = [];
                $n1 = 0;
                foreach ($this->sorts as $item1) {
                    $res['Sorts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Sorts'] as $item1) {
                    $model->sorts[$n1] = sorts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
