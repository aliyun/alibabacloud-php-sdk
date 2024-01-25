<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentVersionsRequest\platforms;
use AlibabaCloud\Tea\Model;

class ListComponentVersionsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var platforms[]
     */
    public $platforms;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'pageNum'   => 'pageNum',
        'pageSize'  => 'pageSize',
        'platforms' => 'platforms',
        'version'   => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->platforms) {
            $res['platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListComponentVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['platforms'])) {
            if (!empty($map['platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? platforms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
