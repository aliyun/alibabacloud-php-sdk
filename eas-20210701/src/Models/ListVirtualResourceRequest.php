<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class ListVirtualResourceRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $virtualResourceId;
    /**
     * @var string
     */
    public $virtualResourceName;
    protected $_name = [
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'virtualResourceId'   => 'VirtualResourceId',
        'virtualResourceName' => 'VirtualResourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->virtualResourceId) {
            $res['VirtualResourceId'] = $this->virtualResourceId;
        }

        if (null !== $this->virtualResourceName) {
            $res['VirtualResourceName'] = $this->virtualResourceName;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['VirtualResourceId'])) {
            $model->virtualResourceId = $map['VirtualResourceId'];
        }

        if (isset($map['VirtualResourceName'])) {
            $model->virtualResourceName = $map['VirtualResourceName'];
        }

        return $model;
    }
}
