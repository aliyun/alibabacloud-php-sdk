<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ForeignInstanceCredInfo extends Model
{
    /**
     * @var string[]
     */
    public $credInfo;

    /**
     * @var string
     */
    public $credType;
    protected $_name = [
        'credInfo' => 'CredInfo',
        'credType' => 'CredType',
    ];

    public function validate()
    {
        if (\is_array($this->credInfo)) {
            Model::validateArray($this->credInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credInfo) {
            if (\is_array($this->credInfo)) {
                $res['CredInfo'] = [];
                foreach ($this->credInfo as $key1 => $value1) {
                    $res['CredInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->credType) {
            $res['CredType'] = $this->credType;
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
        if (isset($map['CredInfo'])) {
            if (!empty($map['CredInfo'])) {
                $model->credInfo = [];
                foreach ($map['CredInfo'] as $key1 => $value1) {
                    $model->credInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['CredType'])) {
            $model->credType = $map['CredType'];
        }

        return $model;
    }
}
