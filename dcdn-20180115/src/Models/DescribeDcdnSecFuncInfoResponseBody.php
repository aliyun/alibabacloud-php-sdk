<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecFuncInfoResponseBody\content;
use AlibabaCloud\Tea\Model;

class DescribeDcdnSecFuncInfoResponseBody extends Model
{
    /**
     * @var content[]
     */
    public $content;

    /**
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @example 200
     *
     * @var string
     */
    public $httpStatus;

    /**
     * @example 30A3A25A-86B3-4C1D-BAA8-12B8607A5CFD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var string
     */
    public $retCode;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'httpStatus'  => 'HttpStatus',
        'requestId'   => 'RequestId',
        'retCode'     => 'RetCode',
    ];

    public function validate()
    {
    }

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
     * @return DescribeDcdnSecFuncInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n              = 0;
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
