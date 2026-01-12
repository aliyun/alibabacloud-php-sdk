<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryAreaMapResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $d3Oss;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $locationOss;

    /**
     * @var string
     */
    public $mapType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'd3Oss' => 'D3Oss',
        'extInfo' => 'ExtInfo',
        'id' => 'Id',
        'locationOss' => 'LocationOss',
        'mapType' => 'MapType',
        'name' => 'Name',
        'note' => 'Note',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->d3Oss) {
            $res['D3Oss'] = $this->d3Oss;
        }

        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->locationOss) {
            $res['LocationOss'] = $this->locationOss;
        }

        if (null !== $this->mapType) {
            $res['MapType'] = $this->mapType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
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
        if (isset($map['D3Oss'])) {
            $model->d3Oss = $map['D3Oss'];
        }

        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LocationOss'])) {
            $model->locationOss = $map['LocationOss'];
        }

        if (isset($map['MapType'])) {
            $model->mapType = $map['MapType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
