<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class MapPkFromHidRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $hid;

    /**
     * @var string
     */
    public $mappingScenes;
    protected $_name = [
        'appName' => 'AppName',
        'bid' => 'Bid',
        'hid' => 'Hid',
        'mappingScenes' => 'MappingScenes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }

        if (null !== $this->hid) {
            $res['Hid'] = $this->hid;
        }

        if (null !== $this->mappingScenes) {
            $res['MappingScenes'] = $this->mappingScenes;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        if (isset($map['Hid'])) {
            $model->hid = $map['Hid'];
        }

        if (isset($map['MappingScenes'])) {
            $model->mappingScenes = $map['MappingScenes'];
        }

        return $model;
    }
}
