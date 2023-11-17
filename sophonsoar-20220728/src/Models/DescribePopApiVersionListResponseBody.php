<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiVersionListResponseBody\versionList;
use AlibabaCloud\Tea\Model;

class DescribePopApiVersionListResponseBody extends Model
{
    /**
     * @example Sas
     *
     * @var string
     */
    public $popCode;

    /**
     * @example DBCDB0E1-4D0E-55A9-A44D-A62ADE7E2FDA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;

    /**
     * @var versionList[]
     */
    public $versionList;
    protected $_name = [
        'popCode'     => 'PopCode',
        'requestId'   => 'RequestId',
        'total'       => 'Total',
        'versionList' => 'VersionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->versionList) {
            $res['VersionList'] = [];
            if (null !== $this->versionList && \is_array($this->versionList)) {
                $n = 0;
                foreach ($this->versionList as $item) {
                    $res['VersionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePopApiVersionListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['VersionList'])) {
            if (!empty($map['VersionList'])) {
                $model->versionList = [];
                $n                  = 0;
                foreach ($map['VersionList'] as $item) {
                    $model->versionList[$n++] = null !== $item ? versionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
