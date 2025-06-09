<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ExternalStore extends Model
{
    /**
     * @var string
     */
    public $externalStoreName;

    /**
     * @var mixed[]
     */
    public $parameter;

    /**
     * @var string
     */
    public $storeType;
    protected $_name = [
        'externalStoreName' => 'externalStoreName',
        'parameter' => 'parameter',
        'storeType' => 'storeType',
    ];

    public function validate()
    {
        if (\is_array($this->parameter)) {
            Model::validateArray($this->parameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalStoreName) {
            $res['externalStoreName'] = $this->externalStoreName;
        }

        if (null !== $this->parameter) {
            if (\is_array($this->parameter)) {
                $res['parameter'] = [];
                foreach ($this->parameter as $key1 => $value1) {
                    $res['parameter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
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
        if (isset($map['externalStoreName'])) {
            $model->externalStoreName = $map['externalStoreName'];
        }

        if (isset($map['parameter'])) {
            if (!empty($map['parameter'])) {
                $model->parameter = [];
                foreach ($map['parameter'] as $key1 => $value1) {
                    $model->parameter[$key1] = $value1;
                }
            }
        }

        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        return $model;
    }
}
