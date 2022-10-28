<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptMekDataBase64) {
            $res['EncryptMekDataBase64'] = $this->encryptMekDataBase64;
        }
        if (null !== $this->mekId) {
            $res['MekId'] = $this->mekId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportMasterKeyVO
     */
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
                $model->projectId = $map['ProjectId'];
            }
        }

        return $model;
    }
}
