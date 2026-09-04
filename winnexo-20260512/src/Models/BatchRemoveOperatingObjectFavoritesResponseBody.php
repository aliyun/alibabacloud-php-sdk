<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\BatchRemoveOperatingObjectFavoritesResponseBody\results;

class BatchRemoveOperatingObjectFavoritesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var int
     */
    public $remainingCount;

    /**
     * @var int
     */
    public $removedCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $requestedCount;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'code' => 'code',
        'graphName' => 'graphName',
        'message' => 'message',
        'objectType' => 'objectType',
        'operatingObjectName' => 'operatingObjectName',
        'remainingCount' => 'remainingCount',
        'removedCount' => 'removedCount',
        'requestId' => 'requestId',
        'requestedCount' => 'requestedCount',
        'results' => 'results',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->remainingCount) {
            $res['remainingCount'] = $this->remainingCount;
        }

        if (null !== $this->removedCount) {
            $res['removedCount'] = $this->removedCount;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->requestedCount) {
            $res['requestedCount'] = $this->requestedCount;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['remainingCount'])) {
            $model->remainingCount = $map['remainingCount'];
        }

        if (isset($map['removedCount'])) {
            $model->removedCount = $map['removedCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['requestedCount'])) {
            $model->requestedCount = $map['requestedCount'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
