<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeCharsetResponseBody;

use AlibabaCloud\Dara\Model;

class charset extends Model
{
    /**
     * @var string
     */
    public $charset;

    /**
     * @var string[]
     */
    public $collations;
    protected $_name = [
        'charset' => 'Charset',
        'collations' => 'Collations',
    ];

    public function validate()
    {
        if (\is_array($this->collations)) {
            Model::validateArray($this->collations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }

        if (null !== $this->collations) {
            if (\is_array($this->collations)) {
                $res['Collations'] = [];
                $n1 = 0;
                foreach ($this->collations as $item1) {
                    $res['Collations'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }

        if (isset($map['Collations'])) {
            if (!empty($map['Collations'])) {
                $model->collations = [];
                $n1 = 0;
                foreach ($map['Collations'] as $item1) {
                    $model->collations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
