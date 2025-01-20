<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ImportMasterKeyVO extends Model
{
    /**
     * @var string
     */
    public $encryptMekDataBase64;
    /**
     * @var int
     */
    public $mekId;
    /**
     * @var int[]
     */
    public $projectId;
    protected $_name = [
        'encryptMekDataBase64' => 'EncryptMekDataBase64',
        'mekId'                => 'MekId',
        'projectId'            => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->projectId)) {
            Model::validateArray($this->projectId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptMekDataBase64) {
            $res['EncryptMekDataBase64'] = $this->encryptMekDataBase64;
        }

        if (null !== $this->mekId) {
            $res['MekId'] = $this->mekId;
        }

        if (null !== $this->projectId) {
            if (\is_array($this->projectId)) {
                $res['ProjectId'] = [];
                $n1               = 0;
                foreach ($this->projectId as $item1) {
                    $res['ProjectId'][$n1++] = $item1;
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
        if (isset($map['EncryptMekDataBase64'])) {
            $model->encryptMekDataBase64 = $map['EncryptMekDataBase64'];
        }

        if (isset($map['MekId'])) {
            $model->mekId = $map['MekId'];
        }

        if (isset($map['ProjectId'])) {
            if (!empty($map['ProjectId'])) {
                $model->projectId = [];
                $n1               = 0;
                foreach ($map['ProjectId'] as $item1) {
                    $model->projectId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
