<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteSourceLocationRequest extends Model
{
    /**
     * @var bool
     */
    public $softDelete;
    /**
     * @var string
     */
    public $sourceLocationName;
    protected $_name = [
        'softDelete'         => 'SoftDelete',
        'sourceLocationName' => 'SourceLocationName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->softDelete) {
            $res['SoftDelete'] = $this->softDelete;
        }

        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
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
        if (isset($map['SoftDelete'])) {
            $model->softDelete = $map['SoftDelete'];
        }

        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        return $model;
    }
}
