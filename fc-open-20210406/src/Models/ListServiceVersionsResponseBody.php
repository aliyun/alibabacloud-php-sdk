<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListServiceVersionsResponseBody\versions;
use AlibabaCloud\Tea\Model;

class ListServiceVersionsResponseBody extends Model
{
    /**
     * @description The information about the version.
     *
     * @example BACKWARD
     *
     * @var string
     */
    public $direction;

    /**
     * @description $.parameters[9].schema.description
     *
     * @example eJhojW7N****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description $.parameters[9].schema.enumValueTitles
     *
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'direction' => 'direction',
        'nextToken' => 'nextToken',
        'versions'  => 'versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->versions) {
            $res['versions'] = [];
            if (null !== $this->versions && \is_array($this->versions)) {
                $n = 0;
                foreach ($this->versions as $item) {
                    $res['versions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n               = 0;
                foreach ($map['versions'] as $item) {
                    $model->versions[$n++] = null !== $item ? versions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
