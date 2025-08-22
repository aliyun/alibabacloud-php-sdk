<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonMetricsResponseBody\data;

use AlibabaCloud\Dara\Model;

class labels extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'description' => 'Description',
        'key' => 'Key',
        'source' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
