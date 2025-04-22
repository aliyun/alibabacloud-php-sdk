<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ScanFileRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fields;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $marker;
    protected $_name = [
        'driveId' => 'drive_id',
        'fields' => 'fields',
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
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['fields'])) {
            $model->fields = $map['fields'];
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
