<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeesResponseBody\digitalEmployees;

class ListDigitalEmployeesResponseBody extends Model
{
    /**
     * @var digitalEmployees[]
     */
    public $digitalEmployees;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'digitalEmployees' => 'digitalEmployees',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->digitalEmployees)) {
            Model::validateArray($this->digitalEmployees);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->digitalEmployees) {
            if (\is_array($this->digitalEmployees)) {
                $res['digitalEmployees'] = [];
                $n1 = 0;
                foreach ($this->digitalEmployees as $item1) {
                    $res['digitalEmployees'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['digitalEmployees'])) {
            if (!empty($map['digitalEmployees'])) {
                $model->digitalEmployees = [];
                $n1 = 0;
                foreach ($map['digitalEmployees'] as $item1) {
                    $model->digitalEmployees[$n1] = digitalEmployees::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
