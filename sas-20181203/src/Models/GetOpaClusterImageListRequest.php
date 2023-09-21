<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetOpaClusterImageListRequest extends Model
{
    /**
     * @example c4af4fdf38a98496a9b63c2be5dae****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example testImage
     *
     * @var string
     */
    public $imageName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'currentPage' => 'CurrentPage',
        'imageName'   => 'ImageName',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpaClusterImageListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
