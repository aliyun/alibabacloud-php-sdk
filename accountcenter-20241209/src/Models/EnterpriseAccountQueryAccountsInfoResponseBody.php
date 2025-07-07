<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryAccountsInfoResponseBody\accountInfoDtoList;

class EnterpriseAccountQueryAccountsInfoResponseBody extends Model
{
    /**
     * @var accountInfoDtoList[]
     */
    public $accountInfoDtoList;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accountInfoDtoList' => 'AccountInfoDtoList',
        'code' => 'Code',
        'maxResults' => 'MaxResults',
        'message' => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->accountInfoDtoList)) {
            Model::validateArray($this->accountInfoDtoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountInfoDtoList) {
            if (\is_array($this->accountInfoDtoList)) {
                $res['AccountInfoDtoList'] = [];
                $n1 = 0;
                foreach ($this->accountInfoDtoList as $item1) {
                    $res['AccountInfoDtoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['AccountInfoDtoList'])) {
            if (!empty($map['AccountInfoDtoList'])) {
                $model->accountInfoDtoList = [];
                $n1 = 0;
                foreach ($map['AccountInfoDtoList'] as $item1) {
                    $model->accountInfoDtoList[$n1] = accountInfoDtoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
