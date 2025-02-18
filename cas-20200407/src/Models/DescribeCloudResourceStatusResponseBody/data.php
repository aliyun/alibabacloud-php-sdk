<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCloudResourceStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cloudName;
    /**
     * @var string
     */
    public $cloudProduct;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cloudName'    => 'CloudName',
        'cloudProduct' => 'CloudProduct',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }

        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }

        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
