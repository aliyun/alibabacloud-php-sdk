<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class SearchFromThirdPartyItem extends Model
{
    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var mixed[]
     */
    public $others;
    protected $_name = [
        'authenticationType' => 'authentication_type',
        'extra' => 'extra',
        'identity' => 'identity',
        'others' => 'others',
    ];

    public function validate()
    {
        if (\is_array($this->others)) {
            Model::validateArray($this->others);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationType) {
            $res['authentication_type'] = $this->authenticationType;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->identity) {
            $res['identity'] = $this->identity;
        }

        if (null !== $this->others) {
            if (\is_array($this->others)) {
                $res['others'] = [];
                foreach ($this->others as $key1 => $value1) {
                    $res['others'][$key1] = $value1;
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
        if (isset($map['authentication_type'])) {
            $model->authenticationType = $map['authentication_type'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['identity'])) {
            $model->identity = $map['identity'];
        }

        if (isset($map['others'])) {
            if (!empty($map['others'])) {
                $model->others = [];
                foreach ($map['others'] as $key1 => $value1) {
                    $model->others[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
