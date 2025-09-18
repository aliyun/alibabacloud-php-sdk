<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteFeatureViewTableRequest\urlDatasource;

class WriteFeatureViewTableRequest extends Model
{
    /**
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
        'mode' => 'Mode',
        'partitions' => 'Partitions',
        'urlDatasource' => 'UrlDatasource',
    ];

    public function validate()
    {
        if (\is_array($this->partitions)) {
            Model::validateArray($this->partitions);
        }
        if (null !== $this->urlDatasource) {
            $this->urlDatasource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->partitions) {
            if (\is_array($this->partitions)) {
                $res['Partitions'] = [];
                foreach ($this->partitions as $key1 => $value1) {
                    $res['Partitions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->urlDatasource) {
            $res['UrlDatasource'] = null !== $this->urlDatasource ? $this->urlDatasource->toArray($noStream) : $this->urlDatasource;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Partitions'])) {
            if (!empty($map['Partitions'])) {
                $model->partitions = [];
                foreach ($map['Partitions'] as $key1 => $value1) {
                    $model->partitions[$key1] = $value1;
                }
            }
        }

        if (isset($map['UrlDatasource'])) {
            $model->urlDatasource = urlDatasource::fromMap($map['UrlDatasource']);
        }

        return $model;
    }
}
