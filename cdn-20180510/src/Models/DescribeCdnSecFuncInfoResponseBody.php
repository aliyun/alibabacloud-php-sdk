<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSecFuncInfoResponseBody\content;
use AlibabaCloud\Tea\Model;

class DescribeCdnSecFuncInfoResponseBody extends Model
{
    /**
     * @description Queried data.
     *
     * @var content[]
     */
    public $content;

    /**
     * @description The description.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $httpStatus;

    /**
     * @description The request ID.
     *
     * @example BCD7D917-76F1-442F-BB75-C810DE34C761
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The HTTP request response code.
     *
     *   0: OK.
     *   Values other than 0: an error.
     *
     * @example 0
     *
     * @var string
     */
    public $retCode;
    protected $_name = [
        'content' => 'Content',
        'description' => 'Description',
        'httpStatus' => 'HttpStatus',
        'requestId' => 'RequestId',
        'retCode' => 'RetCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = [];
            if (null !== $this->content && \is_array($this->content)) {
                $n = 0;
                foreach ($this->content as $item) {
                    $res['Content'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->httpStatus) {
            $res['HttpStatus'] = $this->httpStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnSecFuncInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n = 0;
                foreach ($map['Content'] as $item) {
                    $model->content[$n++] = null !== $item ? content::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HttpStatus'])) {
            $model->httpStatus = $map['HttpStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }

        return $model;
    }
}
