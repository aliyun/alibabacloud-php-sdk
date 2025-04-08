<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListLogContentsRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fileName' => 'fileName',
        'length' => 'length',
        'offset' => 'offset',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->length) {
            $res['length'] = $this->length;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['length'])) {
            $model->length = $map['length'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
