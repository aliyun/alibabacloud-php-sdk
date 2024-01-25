<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListFoundationVersionsRequest extends Model
{
    /**
     * @var bool
     */
    public $onlyDefault;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @example ENUM:["DESC","ASC"]
     *
     * @var string
     */
    public $sortDirect;

    /**
     * @example "created_at"/"sequence"
     *
     * @var string
     */
    public $sortKey;

    /**
     * @example ENUM:["trident","ack"]
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'onlyDefault' => 'onlyDefault',
        'pageNum'     => 'pageNum',
        'pageSize'    => 'pageSize',
        'sortDirect'  => 'sortDirect',
        'sortKey'     => 'sortKey',
        'type'        => 'type',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlyDefault) {
            $res['onlyDefault'] = $this->onlyDefault;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->sortDirect) {
            $res['sortDirect'] = $this->sortDirect;
        }
        if (null !== $this->sortKey) {
            $res['sortKey'] = $this->sortKey;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFoundationVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['onlyDefault'])) {
            $model->onlyDefault = $map['onlyDefault'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['sortDirect'])) {
            $model->sortDirect = $map['sortDirect'];
        }
        if (isset($map['sortKey'])) {
            $model->sortKey = $map['sortKey'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
