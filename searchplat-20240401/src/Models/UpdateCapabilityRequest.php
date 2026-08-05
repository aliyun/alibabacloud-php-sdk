<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models;

use AlibabaCloud\Dara\Model;

class UpdateCapabilityRequest extends Model
{
    /**
     * @var string
     */
    public $itemDesc;

    /**
     * @var mixed[]
     */
    public $itemValue;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'itemDesc' => 'itemDesc',
        'itemValue' => 'itemValue',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        if (\is_array($this->itemValue)) {
            Model::validateArray($this->itemValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemDesc) {
            $res['itemDesc'] = $this->itemDesc;
        }

        if (null !== $this->itemValue) {
            if (\is_array($this->itemValue)) {
                $res['itemValue'] = [];
                foreach ($this->itemValue as $key1 => $value1) {
                    $res['itemValue'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['itemDesc'])) {
            $model->itemDesc = $map['itemDesc'];
        }

        if (isset($map['itemValue'])) {
            if (!empty($map['itemValue'])) {
                $model->itemValue = [];
                foreach ($map['itemValue'] as $key1 => $value1) {
                    $model->itemValue[$key1] = $value1;
                }
            }
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
