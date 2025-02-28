<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class UpdateJobConfigParam extends Model
{
    /**
     * @var mixed[]
     */
    public $newFlinkConf;
    protected $_name = [
        'newFlinkConf' => 'newFlinkConf',
    ];

    public function validate()
    {
        if (\is_array($this->newFlinkConf)) {
            Model::validateArray($this->newFlinkConf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newFlinkConf) {
            if (\is_array($this->newFlinkConf)) {
                $res['newFlinkConf'] = [];
                foreach ($this->newFlinkConf as $key1 => $value1) {
                    $res['newFlinkConf'][$key1] = $value1;
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
        if (isset($map['newFlinkConf'])) {
            if (!empty($map['newFlinkConf'])) {
                $model->newFlinkConf = [];
                foreach ($map['newFlinkConf'] as $key1 => $value1) {
                    $model->newFlinkConf[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
