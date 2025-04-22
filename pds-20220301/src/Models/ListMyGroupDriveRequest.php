<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ListMyGroupDriveRequest extends Model
{
    /**
     * @var string
     */
    public $driveName;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $marker;
    protected $_name = [
        'driveName' => 'drive_name',
        'limit' => 'limit',
        'marker' => 'marker',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveName) {
            $res['drive_name'] = $this->driveName;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
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
        if (isset($map['drive_name'])) {
            $model->driveName = $map['drive_name'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        return $model;
    }
}
