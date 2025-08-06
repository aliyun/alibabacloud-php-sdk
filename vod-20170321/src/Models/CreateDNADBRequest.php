<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class CreateDNADBRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBDescription;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $DBRegion;

    /**
     * @var string
     */
    public $DBType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'DBDescription' => 'DBDescription',
        'DBName' => 'DBName',
        'DBRegion' => 'DBRegion',
        'DBType' => 'DBType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->DBRegion) {
            $res['DBRegion'] = $this->DBRegion;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['DBRegion'])) {
            $model->DBRegion = $map['DBRegion'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        return $model;
    }
}
