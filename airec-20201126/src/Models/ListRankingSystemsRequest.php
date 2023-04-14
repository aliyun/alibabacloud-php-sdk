<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListRankingSystemsRequest extends Model
{
    /**
     * @description The state of the deployment. Valid values: NOT_DEPLOYED: The ranking service is not deployed. DEPLOY_SUCCESS: The ranking service is deployed.
     *
     * @example NOT_DEPLOYED
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @description The name of the ranking service.
     *
     * @example service-a
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'deployStatus' => 'deployStatus',
        'name'         => 'name',
        'page'         => 'page',
        'size'         => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRankingSystemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
