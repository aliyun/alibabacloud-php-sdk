<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites;
use AlibabaCloud\Tea\Model;

class DescribeOfficeSitesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var officeSites[]
     */
    public $officeSites;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'   => 'NextToken',
        'officeSites' => 'OfficeSites',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->officeSites) {
            $res['OfficeSites'] = [];
            if (null !== $this->officeSites && \is_array($this->officeSites)) {
                $n = 0;
                foreach ($this->officeSites as $item) {
                    $res['OfficeSites'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeOfficeSitesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OfficeSites'])) {
            if (!empty($map['OfficeSites'])) {
                $model->officeSites = [];
                $n                  = 0;
                foreach ($map['OfficeSites'] as $item) {
                    $model->officeSites[$n++] = null !== $item ? officeSites::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
