<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody\cves;
use AlibabaCloud\Tea\Model;

class DescribeVulDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var cves[]
     */
    public $cves;
    protected $_name = [
        'requestId' => 'RequestId',
        'cves'      => 'Cves',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cves) {
            $res['Cves'] = [];
            if (null !== $this->cves && \is_array($this->cves)) {
                $n = 0;
                foreach ($this->cves as $item) {
                    $res['Cves'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Cves'])) {
            if (!empty($map['Cves'])) {
                $model->cves = [];
                $n           = 0;
                foreach ($map['Cves'] as $item) {
                    $model->cves[$n++] = null !== $item ? cves::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
