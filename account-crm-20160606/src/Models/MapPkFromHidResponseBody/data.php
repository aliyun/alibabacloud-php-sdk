<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\MapPkFromHidResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $hid;

    /**
     * @var string
     */
    public $mappingSrc;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'hid' => 'Hid',
        'mappingSrc' => 'MappingSrc',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hid) {
            $res['Hid'] = $this->hid;
        }

        if (null !== $this->mappingSrc) {
            $res['MappingSrc'] = $this->mappingSrc;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['Hid'])) {
            $model->hid = $map['Hid'];
        }

        if (isset($map['MappingSrc'])) {
            $model->mappingSrc = $map['MappingSrc'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
