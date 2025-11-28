<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeStatDeviceInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class bizChainList extends Model
{
    /**
     * @var int
     */
    public $authorizedCount;

    /**
     * @var string
     */
    public $bizChainName;
    protected $_name = [
        'authorizedCount' => 'AuthorizedCount',
        'bizChainName' => 'BizChainName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedCount) {
            $res['AuthorizedCount'] = $this->authorizedCount;
        }

        if (null !== $this->bizChainName) {
            $res['BizChainName'] = $this->bizChainName;
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
        if (isset($map['AuthorizedCount'])) {
            $model->authorizedCount = $map['AuthorizedCount'];
        }

        if (isset($map['BizChainName'])) {
            $model->bizChainName = $map['BizChainName'];
        }

        return $model;
    }
}
