<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckCustomConfigResponseBody\illegalCustomConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckCustomConfigResponseBody\illegalRepairConfigs;

class ChangeCheckCustomConfigResponseBody extends Model
{
    /**
     * @var illegalCustomConfigs[]
     */
    public $illegalCustomConfigs;
    /**
     * @var illegalRepairConfigs[]
     */
    public $illegalRepairConfigs;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'illegalCustomConfigs' => 'IllegalCustomConfigs',
        'illegalRepairConfigs' => 'IllegalRepairConfigs',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->illegalCustomConfigs)) {
            Model::validateArray($this->illegalCustomConfigs);
        }
        if (\is_array($this->illegalRepairConfigs)) {
            Model::validateArray($this->illegalRepairConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->illegalCustomConfigs) {
            if (\is_array($this->illegalCustomConfigs)) {
                $res['IllegalCustomConfigs'] = [];
                $n1                          = 0;
                foreach ($this->illegalCustomConfigs as $item1) {
                    $res['IllegalCustomConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->illegalRepairConfigs) {
            if (\is_array($this->illegalRepairConfigs)) {
                $res['IllegalRepairConfigs'] = [];
                $n1                          = 0;
                foreach ($this->illegalRepairConfigs as $item1) {
                    $res['IllegalRepairConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IllegalCustomConfigs'])) {
            if (!empty($map['IllegalCustomConfigs'])) {
                $model->illegalCustomConfigs = [];
                $n1                          = 0;
                foreach ($map['IllegalCustomConfigs'] as $item1) {
                    $model->illegalCustomConfigs[$n1++] = illegalCustomConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['IllegalRepairConfigs'])) {
            if (!empty($map['IllegalRepairConfigs'])) {
                $model->illegalRepairConfigs = [];
                $n1                          = 0;
                foreach ($map['IllegalRepairConfigs'] as $item1) {
                    $model->illegalRepairConfigs[$n1++] = illegalRepairConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
