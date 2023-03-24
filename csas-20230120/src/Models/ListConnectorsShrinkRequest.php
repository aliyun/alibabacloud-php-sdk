<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListConnectorsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $connectorIdsShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example connector_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'connectorIdsShrink' => 'ConnectorIds',
        'currentPage'        => 'CurrentPage',
        'name'               => 'Name',
        'pageSize'           => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectorIdsShrink) {
            $res['ConnectorIds'] = $this->connectorIdsShrink;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
     * @return ListConnectorsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectorIds'])) {
            $model->connectorIdsShrink = $map['ConnectorIds'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
