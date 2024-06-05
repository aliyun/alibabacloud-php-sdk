<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\Tea\Model;

class AddDatabaseListRequest extends Model
{
    /**
     * @example ETnLKlblzczshOTUbOCzxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example [{"host":"127.0.0.1","port":"3306","gatewayId":"dg-xsdasdasdas****"}]
     *
     * @var string
     */
    public $databaseString;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'databaseString' => 'DatabaseString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->databaseString) {
            $res['DatabaseString'] = $this->databaseString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDatabaseListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DatabaseString'])) {
            $model->databaseString = $map['DatabaseString'];
        }

        return $model;
    }
}
