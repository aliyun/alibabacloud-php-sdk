<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody\data;

use AlibabaCloud\Dara\Model;

class srcVersions extends Model
{
    /**
     * @var string[]
     */
    public $srcVersion;
    protected $_name = [
        'srcVersion' => 'SrcVersion',
    ];

    public function validate()
    {
        if (\is_array($this->srcVersion)) {
            Model::validateArray($this->srcVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->srcVersion) {
            if (\is_array($this->srcVersion)) {
                $res['SrcVersion'] = [];
                $n1 = 0;
                foreach ($this->srcVersion as $item1) {
                    $res['SrcVersion'][$n1] = $item1;
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
        if (isset($map['SrcVersion'])) {
            if (!empty($map['SrcVersion'])) {
                $model->srcVersion = [];
                $n1 = 0;
                foreach ($map['SrcVersion'] as $item1) {
                    $model->srcVersion[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
