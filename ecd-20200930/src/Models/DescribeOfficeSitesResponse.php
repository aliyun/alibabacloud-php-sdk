<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponse\officeSites;
use AlibabaCloud\Tea\Model;

class DescribeOfficeSitesResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var officeSites[]
     */
    public $officeSites;
    protected $_name = [
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'officeSites' => 'OfficeSites',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('officeSites', $this->officeSites, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOfficeSitesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
