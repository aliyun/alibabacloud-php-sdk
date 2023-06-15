<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecretsResponseBody\secrets;
use AlibabaCloud\Tea\Model;

class DescribeSecretsResponseBody extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example DF4961DD-16F5-5B24-BD4C-0C7788F7ADAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the details about the credential.
     *
     * @var secrets[]
     */
    public $secrets;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'secrets'    => 'Secrets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secrets) {
            $res['Secrets'] = [];
            if (null !== $this->secrets && \is_array($this->secrets)) {
                $n = 0;
                foreach ($this->secrets as $item) {
                    $res['Secrets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecretsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                $n              = 0;
                foreach ($map['Secrets'] as $item) {
                    $model->secrets[$n++] = null !== $item ? secrets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
