<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteDataSourceRequest;

use AlibabaCloud\Dara\Model;

class deleteCommand extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $prodDataSourceId;
    protected $_name = [
        'mode' => 'Mode',
        'prodDataSourceId' => 'ProdDataSourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->prodDataSourceId) {
            $res['ProdDataSourceId'] = $this->prodDataSourceId;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['ProdDataSourceId'])) {
            $model->prodDataSourceId = $map['ProdDataSourceId'];
        }

        return $model;
    }
}
