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
    public $appGuid;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $selectColumn;

    /**
     * @var string
     */
    public $selectSQL;

    /**
     * @var string
     */
    public $selectTableName;

    /**
     * @var string
     */
    public $selectWhere;

    /**
     * @var viewColumn[]
     */
    public $viewColumn;

    /**
     * @var string
     */
    public $viewName;
    protected $_name = [
        'appGuid'         => 'AppGuid',
        'clientToken'     => 'ClientToken',
        'comment'         => 'Comment',
        'selectColumn'    => 'SelectColumn',
        'selectSQL'       => 'SelectSQL',
        'selectTableName' => 'SelectTableName',
        'selectWhere'     => 'SelectWhere',
        'viewColumn'      => 'ViewColumn',
        'viewName'        => 'ViewName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->selectColumn) {
            $res['SelectColumn'] = $this->selectColumn;
        }
        if (null !== $this->selectSQL) {
            $res['SelectSQL'] = $this->selectSQL;
        }
        if (null !== $this->selectTableName) {
            $res['SelectTableName'] = $this->selectTableName;
        }
        if (null !== $this->selectWhere) {
            $res['SelectWhere'] = $this->selectWhere;
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
        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
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
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['SelectColumn'])) {
            $model->selectColumn = $map['SelectColumn'];
        }
        if (isset($map['SelectSQL'])) {
            $model->selectSQL = $map['SelectSQL'];
        }
        if (isset($map['SelectTableName'])) {
            $model->selectTableName = $map['SelectTableName'];
        }
        if (isset($map['SelectWhere'])) {
            $model->selectWhere = $map['SelectWhere'];
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
        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }

        return $model;
    }
}
