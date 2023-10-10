<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListConfigTemplatesRequest extends Model
{
    /**
     * @description The number of the page to return. Pages start from Page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the configuration template.
     *
     * @example 3d84efaf-37d9-49fb-a3a8-b38d5c******
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the configuration template.
     *
     * @example config-tmpl-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'id'          => 'Id',
        'name'        => 'Name',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
