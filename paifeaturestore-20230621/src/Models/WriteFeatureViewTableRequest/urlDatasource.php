<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteFeatureViewTableRequest;

use AlibabaCloud\Dara\Model;

class urlDatasource extends Model
{
    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var bool
     */
    public $omitHeader;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'delimiter' => 'Delimiter',
        'omitHeader' => 'OmitHeader',
        'path' => 'Path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
