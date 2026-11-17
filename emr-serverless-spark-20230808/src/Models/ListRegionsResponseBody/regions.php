<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRegionsResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enName' => 'enName',
        'localName' => 'localName',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enName) {
            $res['enName'] = $this->enName;
        }

        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
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
        if (isset($map['enName'])) {
            $model->enName = $map['enName'];
        }

        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
