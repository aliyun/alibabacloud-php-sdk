<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateViewRequest\viewColumn;
use AlibabaCloud\Tea\Model;

class CreateViewRequest extends Model
{
    /**
     * @var string
     */
    public $viewName;

    /**
     * @var string
     */
    public $selectColumn;

    /**
     * @var string
     */
    public $selectTableName;

    /**
     * @var string
     */
    public $selectWhere;

    /**
     * @var string
     */
    public $selectSQL;

    /**
     * @var string
     */
    public $appGuid;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var viewColumn[]
     */
    public $viewColumn;
    protected $_name = [
        'viewName'        => 'ViewName',
        'selectColumn'    => 'SelectColumn',
        'selectTableName' => 'SelectTableName',
        'selectWhere'     => 'SelectWhere',
        'selectSQL'       => 'SelectSQL',
        'appGuid'         => 'AppGuid',
        'comment'         => 'Comment',
        'clientToken'     => 'ClientToken',
        'viewColumn'      => 'ViewColumn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
        }
        if (null !== $this->selectColumn) {
            $res['SelectColumn'] = $this->selectColumn;
        }
        if (null !== $this->selectTableName) {
            $res['SelectTableName'] = $this->selectTableName;
        }
        if (null !== $this->selectWhere) {
            $res['SelectWhere'] = $this->selectWhere;
        }
        if (null !== $this->selectSQL) {
            $res['SelectSQL'] = $this->selectSQL;
        }
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->viewColumn) {
            $res['ViewColumn'] = [];
            if (null !== $this->viewColumn && \is_array($this->viewColumn)) {
                $n = 0;
                foreach ($this->viewColumn as $item) {
                    $res['ViewColumn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }
        if (isset($map['SelectColumn'])) {
            $model->selectColumn = $map['SelectColumn'];
        }
        if (isset($map['SelectTableName'])) {
            $model->selectTableName = $map['SelectTableName'];
        }
        if (isset($map['SelectWhere'])) {
            $model->selectWhere = $map['SelectWhere'];
        }
        if (isset($map['SelectSQL'])) {
            $model->selectSQL = $map['SelectSQL'];
        }
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ViewColumn'])) {
            if (!empty($map['ViewColumn'])) {
                $model->viewColumn = [];
                $n                 = 0;
                foreach ($map['ViewColumn'] as $item) {
                    $model->viewColumn[$n++] = null !== $item ? viewColumn::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
