<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksResponseBody\DBLinkInfos;
use AlibabaCloud\Tea\Model;

class DescribeDBLinksResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-a*************
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description Details about the database links.
     *
     * @var DBLinkInfos[]
     */
    public $DBLinkInfos;

    /**
     * @description The ID of the request.
     *
     * @example 45D24263-7E3A-4140-9472-************
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'DBLinkInfos'    => 'DBLinkInfos',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
