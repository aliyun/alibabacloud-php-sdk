<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksResponseBody\DBLinkInfos;
use AlibabaCloud\Tea\Model;

class DescribeDBLinksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var DBLinkInfos[]
     */
    public $DBLinkInfos;

    /**
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'requestId'      => 'RequestId',
        'DBLinkInfos'    => 'DBLinkInfos',
        'DBInstanceName' => 'DBInstanceName',
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
        if (null !== $this->DBLinkInfos) {
            $res['DBLinkInfos'] = [];
            if (null !== $this->DBLinkInfos && \is_array($this->DBLinkInfos)) {
                $n = 0;
                foreach ($this->DBLinkInfos as $item) {
                    $res['DBLinkInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBLinksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBLinkInfos'])) {
            if (!empty($map['DBLinkInfos'])) {
                $model->DBLinkInfos = [];
                $n                  = 0;
                foreach ($map['DBLinkInfos'] as $item) {
                    $model->DBLinkInfos[$n++] = null !== $item ? DBLinkInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}
