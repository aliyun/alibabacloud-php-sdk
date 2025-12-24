<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\details;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\page;

class DescribeSoarTaskAndActionsResponseBody extends Model
{
    /**
     * @var details
     */
    public $details;

    /**
     * @var page
     */
    public $page;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'details' => 'Details',
        'page' => 'Page',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->details) {
            $this->details->validate();
        }
        if (null !== $this->page) {
            $this->page->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = null !== $this->details ? $this->details->toArray($noStream) : $this->details;
        }

        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
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
        if (isset($map['Details'])) {
            $model->details = details::fromMap($map['Details']);
        }

        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
