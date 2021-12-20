<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDetailsResponse\cves;
use AlibabaCloud\Tea\Model;

class DescribeVulDetailsResponse extends Model
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
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('cves', $this->cves, true);
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
     * @return DescribeVulDetailsResponse
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
