<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteFeatureViewTableRequest\urlDatasource;
use AlibabaCloud\Tea\Model;

class WriteFeatureViewTableRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Merge
     *
     * @var string
     */
    public $mode;

    /**
     * @var mixed[][]
     */
    public $partitions;

    /**
     * @var urlDatasource
     */
    public $urlDatasource;
    protected $_name = [
        'mode'          => 'Mode',
        'partitions'    => 'Partitions',
        'urlDatasource' => 'UrlDatasource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->partitions) {
            $res['Partitions'] = $this->partitions;
        }
        if (null !== $this->urlDatasource) {
            $res['UrlDatasource'] = null !== $this->urlDatasource ? $this->urlDatasource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WriteFeatureViewTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Partitions'])) {
            $model->partitions = $map['Partitions'];
        }
        if (isset($map['UrlDatasource'])) {
            $model->urlDatasource = urlDatasource::fromMap($map['UrlDatasource']);
        }

        return $model;
    }
}
