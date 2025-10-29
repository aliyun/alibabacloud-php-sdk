<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\SetPolarFsFileQuotaRequest\filePathQuotas;

class SetPolarFsFileQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var filePathQuotas[]
     */
    public $filePathQuotas;

    /**
     * @var string
     */
    public $polarFsInstanceId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'filePathQuotas' => 'FilePathQuotas',
        'polarFsInstanceId' => 'PolarFsInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->filePathQuotas)) {
            Model::validateArray($this->filePathQuotas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->filePathQuotas) {
            if (\is_array($this->filePathQuotas)) {
                $res['FilePathQuotas'] = [];
                $n1 = 0;
                foreach ($this->filePathQuotas as $item1) {
                    $res['FilePathQuotas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['FilePathQuotas'])) {
            if (!empty($map['FilePathQuotas'])) {
                $model->filePathQuotas = [];
                $n1 = 0;
                foreach ($map['FilePathQuotas'] as $item1) {
                    $model->filePathQuotas[$n1] = filePathQuotas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        return $model;
    }
}
