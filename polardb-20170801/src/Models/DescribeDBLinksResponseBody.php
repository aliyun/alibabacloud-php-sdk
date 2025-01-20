<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksResponseBody\DBLinkInfos;

class DescribeDBLinksResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var DBLinkInfos[]
     */
    public $DBLinkInfos;
    /**
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
        if (\is_array($this->DBLinkInfos)) {
            Model::validateArray($this->DBLinkInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->DBLinkInfos) {
            if (\is_array($this->DBLinkInfos)) {
                $res['DBLinkInfos'] = [];
                $n1                 = 0;
                foreach ($this->DBLinkInfos as $item1) {
                    $res['DBLinkInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DBLinkInfos'])) {
            if (!empty($map['DBLinkInfos'])) {
                $model->DBLinkInfos = [];
                $n1                 = 0;
                foreach ($map['DBLinkInfos'] as $item1) {
                    $model->DBLinkInfos[$n1++] = DBLinkInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
