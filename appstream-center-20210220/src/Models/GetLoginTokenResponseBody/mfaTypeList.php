<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody;

use AlibabaCloud\Tea\Model;

class mfaTypeList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $stage;
    protected $_name = [
        'name'  => 'Name',
        'stage' => 'Stage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mfaTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        return $model;
    }
}
