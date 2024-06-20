<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotEventFlowsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $securityEventId;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'dealed'          => 'Dealed',
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'securityEventId' => 'SecurityEventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotEventFlowsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }

        return $model;
    }
}
