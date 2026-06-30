<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListRayLogsRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxKeys;

    /**
     * @var string
     */
    public $prefix;
    protected $_name = [
        'bucketName' => 'bucketName',
        'delimiter' => 'delimiter',
        'marker' => 'marker',
        'maxKeys' => 'maxKeys',
        'prefix' => 'prefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }

        if (null !== $this->delimiter) {
            $res['delimiter'] = $this->delimiter;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->maxKeys) {
            $res['maxKeys'] = $this->maxKeys;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
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
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }

        if (isset($map['delimiter'])) {
            $model->delimiter = $map['delimiter'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['maxKeys'])) {
            $model->maxKeys = $map['maxKeys'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        return $model;
    }
}
