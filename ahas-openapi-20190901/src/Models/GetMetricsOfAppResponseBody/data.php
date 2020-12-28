<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetMetricsOfAppResponseBody;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetMetricsOfAppResponseBody\data\innerMetrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var innerMetrics[]
     */
    public $innerMetrics;
    protected $_name = [
        'appName'      => 'AppName',
        'namespace'    => 'Namespace',
        'innerMetrics' => 'InnerMetrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->innerMetrics) {
            $res['InnerMetrics'] = [];
            if (null !== $this->innerMetrics && \is_array($this->innerMetrics)) {
                $n = 0;
                foreach ($this->innerMetrics as $item) {
                    $res['InnerMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['InnerMetrics'])) {
            if (!empty($map['InnerMetrics'])) {
                $model->innerMetrics = [];
                $n                   = 0;
                foreach ($map['InnerMetrics'] as $item) {
                    $model->innerMetrics[$n++] = null !== $item ? innerMetrics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
