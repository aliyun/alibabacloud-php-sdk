<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceSchemeMatchResponseBody\data;

use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceSchemeMatchResponseBody\data\schemeContent\contentModules;
use AlibabaCloud\Tea\Model;

class schemeContent extends Model
{
    /**
     * @var int
     */
    public $contentIndex;

    /**
     * @var contentModules[]
     */
    public $contentModules;

    /**
     * @var string
     */
    public $display;
    protected $_name = [
        'contentIndex'   => 'ContentIndex',
        'contentModules' => 'ContentModules',
        'display'        => 'Display',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentIndex) {
            $res['ContentIndex'] = $this->contentIndex;
        }
        if (null !== $this->contentModules) {
            $res['ContentModules'] = [];
            if (null !== $this->contentModules && \is_array($this->contentModules)) {
                $n = 0;
                foreach ($this->contentModules as $item) {
                    $res['ContentModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemeContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentIndex'])) {
            $model->contentIndex = $map['ContentIndex'];
        }
        if (isset($map['ContentModules'])) {
            if (!empty($map['ContentModules'])) {
                $model->contentModules = [];
                $n                     = 0;
                foreach ($map['ContentModules'] as $item) {
                    $model->contentModules[$n++] = null !== $item ? contentModules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }

        return $model;
    }
}
