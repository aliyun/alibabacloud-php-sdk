<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListDNADBResponseBody;

use AlibabaCloud\Dara\Model;

class DNADBList extends Model
{
    /**
     * @var string
     */
    public $DBDescription;

    /**
     * @var string
     */
    public $DBId;

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

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'DBDescription' => 'DBDescription',
        'DBId' => 'DBId',
        'DBName' => 'DBName',
        'DBRegion' => 'DBRegion',
        'DBType' => 'DBType',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
        }

        if (null !== $this->DBId) {
            $res['DBId'] = $this->DBId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
        }

        if (isset($map['DBId'])) {
            $model->DBId = $map['DBId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
