<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialsResponseBody\trials;
use AlibabaCloud\Tea\Model;

class ListHpoTrialsResponseBody extends Model
{
    /**
     * @example INVALID_USER_OR_EXP
     *
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $detail;

    /**
     * @example Missing \"user_id\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @example 3F190916-B3E5-5D1E-AD0C-35C0DF105F51
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var trials[]
     */
    public $trials;
    protected $_name = [
        'code'       => 'Code',
        'detail'     => 'Detail',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'trials'     => 'Trials',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trials) {
            $res['Trials'] = [];
            if (null !== $this->trials && \is_array($this->trials)) {
                $n = 0;
                foreach ($this->trials as $item) {
                    $res['Trials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHpoTrialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Trials'])) {
            if (!empty($map['Trials'])) {
                $model->trials = [];
                $n             = 0;
                foreach ($map['Trials'] as $item) {
                    $model->trials[$n++] = null !== $item ? trials::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
