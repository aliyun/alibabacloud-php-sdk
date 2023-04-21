<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDetailsResponseBody\cves;
use AlibabaCloud\Tea\Model;

class DescribeVulDetailsResponseBody extends Model
{
    /**
     * @description Details about the vulnerability.
     *
     * @var cves[]
     */
    public $cves;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cves'      => 'Cves',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cves) {
            $res['Cves'] = [];
            if (null !== $this->cves && \is_array($this->cves)) {
                $n = 0;
                foreach ($this->cves as $item) {
                    $res['Cves'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cves'])) {
            if (!empty($map['Cves'])) {
                $model->cves = [];
                $n           = 0;
                foreach ($map['Cves'] as $item) {
                    $model->cves[$n++] = null !== $item ? cves::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
