<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetRunResponseBody\data\outcome\interrupts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetRunResponseBody\data\outcome\interrupts\data\apiCalls;

class data extends Model
{
    /**
     * @var apiCalls[]
     */
    public $apiCalls;

    /**
     * @var string
     */
    public $approvalId;

    /**
     * @var string
     */
    public $approvalUrl;

    /**
     * @var bool
     */
    public $cancellable;

    /**
     * @var string
     */
    public $changeDigest;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'apiCalls' => 'apiCalls',
        'approvalId' => 'approvalId',
        'approvalUrl' => 'approvalUrl',
        'cancellable' => 'cancellable',
        'changeDigest' => 'changeDigest',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->apiCalls)) {
            Model::validateArray($this->apiCalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiCalls) {
            if (\is_array($this->apiCalls)) {
                $res['apiCalls'] = [];
                $n1 = 0;
                foreach ($this->apiCalls as $item1) {
                    $res['apiCalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->approvalId) {
            $res['approvalId'] = $this->approvalId;
        }

        if (null !== $this->approvalUrl) {
            $res['approvalUrl'] = $this->approvalUrl;
        }

        if (null !== $this->cancellable) {
            $res['cancellable'] = $this->cancellable;
        }

        if (null !== $this->changeDigest) {
            $res['changeDigest'] = $this->changeDigest;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['apiCalls'])) {
            if (!empty($map['apiCalls'])) {
                $model->apiCalls = [];
                $n1 = 0;
                foreach ($map['apiCalls'] as $item1) {
                    $model->apiCalls[$n1] = apiCalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['approvalId'])) {
            $model->approvalId = $map['approvalId'];
        }

        if (isset($map['approvalUrl'])) {
            $model->approvalUrl = $map['approvalUrl'];
        }

        if (isset($map['cancellable'])) {
            $model->cancellable = $map['cancellable'];
        }

        if (isset($map['changeDigest'])) {
            $model->changeDigest = $map['changeDigest'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
