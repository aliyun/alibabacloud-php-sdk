<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectModifyRecordsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $databasesShrink;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $transferMappingShrink;
    protected $_name = [
        'databasesShrink' => 'Databases',
        'id' => 'Id',
        'transferMappingShrink' => 'TransferMapping',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databasesShrink) {
            $res['Databases'] = $this->databasesShrink;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->transferMappingShrink) {
            $res['TransferMapping'] = $this->transferMappingShrink;
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
        if (isset($map['Databases'])) {
            $model->databasesShrink = $map['Databases'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['TransferMapping'])) {
            $model->transferMappingShrink = $map['TransferMapping'];
        }

        return $model;
    }
}
