<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetHistogramsResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetHistogramsResponseBody\data\histograms;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The distribution of logs.
     *
     * @var histograms[]
     */
    public $histograms;

    /**
     * @description The name of the server.
     *
     * @example nginx
     *
     * @var string
     */
    public $server;

    /**
     * @description The number of logs that are generated within the subinterval.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'histograms' => 'Histograms',
        'server'     => 'Server',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->histograms) {
            $res['Histograms'] = [];
            if (null !== $this->histograms && \is_array($this->histograms)) {
                $n = 0;
                foreach ($this->histograms as $item) {
                    $res['Histograms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Histograms'])) {
            if (!empty($map['Histograms'])) {
                $model->histograms = [];
                $n                 = 0;
                foreach ($map['Histograms'] as $item) {
                    $model->histograms[$n++] = null !== $item ? histograms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
