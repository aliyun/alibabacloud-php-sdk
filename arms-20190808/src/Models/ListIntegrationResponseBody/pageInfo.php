<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponseBody\pageInfo\integrations;
use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @var integrations[]
     */
    public $integrations;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'integrations' => 'Integrations',
        'page'         => 'Page',
        'size'         => 'Size',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integrations) {
            $res['Integrations'] = [];
            if (null !== $this->integrations && \is_array($this->integrations)) {
                $n = 0;
                foreach ($this->integrations as $item) {
                    $res['Integrations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Integrations'])) {
            if (!empty($map['Integrations'])) {
                $model->integrations = [];
                $n                   = 0;
                foreach ($map['Integrations'] as $item) {
                    $model->integrations[$n++] = null !== $item ? integrations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
