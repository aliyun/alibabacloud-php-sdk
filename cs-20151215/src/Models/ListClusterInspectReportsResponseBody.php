<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterInspectReportsResponseBody\reports;

class ListClusterInspectReportsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var reports[]
     */
    public $reports;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'nextToken',
        'reports' => 'reports',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->reports)) {
            Model::validateArray($this->reports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->reports) {
            if (\is_array($this->reports)) {
                $res['reports'] = [];
                $n1 = 0;
                foreach ($this->reports as $item1) {
                    $res['reports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['reports'])) {
            if (!empty($map['reports'])) {
                $model->reports = [];
                $n1 = 0;
                foreach ($map['reports'] as $item1) {
                    $model->reports[$n1] = reports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
