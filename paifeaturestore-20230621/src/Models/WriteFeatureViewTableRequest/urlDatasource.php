<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteFeatureViewTableRequest;

use AlibabaCloud\Tea\Model;

class urlDatasource extends Model
{
    /**
     * @example ,
     *
     * @var string
     */
    public $delimiter;

    /**
     * @example true
     *
     * @var bool
     */
    public $omitHeader;

    /**
     * @example xxx.xxx.com/file.csv
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'delimiter'  => 'Delimiter',
        'omitHeader' => 'OmitHeader',
        'path'       => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
        }
        if (null !== $this->omitHeader) {
            $res['OmitHeader'] = $this->omitHeader;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urlDatasource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Delimiter'])) {
            $model->delimiter = $map['Delimiter'];
        }
        if (isset($map['OmitHeader'])) {
            $model->omitHeader = $map['OmitHeader'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
