<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteDataSourceRequest;

use AlibabaCloud\Tea\Model;

class deleteCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DEV
     *
     * @var string
     */
    public $mode;

    /**
     * @description This parameter is required.
     *
     * @example 13121
     *
     * @var int
     */
    public $prodDataSourceId;
    protected $_name = [
        'mode'             => 'Mode',
        'prodDataSourceId' => 'ProdDataSourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return deleteCommand
     */
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
