<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionLibsResponseBody\libs;

use AlibabaCloud\Dara\Model;

class lib extends Model
{
    /**
     * @var string
     */
    public $libDescription;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;
    protected $_name = [
        'libDescription' => 'LibDescription',
        'libId' => 'LibId',
        'libName' => 'LibName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->libDescription) {
            $res['LibDescription'] = $this->libDescription;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
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
        if (isset($map['LibDescription'])) {
            $model->libDescription = $map['LibDescription'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }

        return $model;
    }
}
