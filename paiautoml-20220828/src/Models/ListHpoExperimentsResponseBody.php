<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentsResponseBody\experiments;
use AlibabaCloud\Tea\Model;

class ListHpoExperimentsResponseBody extends Model
{
    /**
     * @description Error code.
     *
     * @example INVALID_INPUT_PARAMS
     *
     * @var string
     */
    public $code;

    /**
     * @description Extra error information.
     *
     * @var string[]
     */
    public $detail;

    /**
     * @description experiment array.
     *
     * @var experiments[]
     */
    public $experiments;

    /**
     * @description Error message.
     *
     * @example Missing \\"user_id\\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 3F190916-B3E5-5D1E-AD0C-35C0DF105F51
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total qualified experiment count.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'        => 'Code',
        'detail'      => 'Detail',
        'experiments' => 'Experiments',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
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
        if (null !== $this->experiments) {
            $res['Experiments'] = [];
            if (null !== $this->experiments && \is_array($this->experiments)) {
                $n = 0;
                foreach ($this->experiments as $item) {
                    $res['Experiments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHpoExperimentsResponseBody
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
        if (isset($map['Experiments'])) {
            if (!empty($map['Experiments'])) {
                $model->experiments = [];
                $n                  = 0;
                foreach ($map['Experiments'] as $item) {
                    $model->experiments[$n++] = null !== $item ? experiments::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
