<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableBusiRegionsResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var bool
     */
    public $chinaMainland;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var bool
     */
    public $pop;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'chinaMainland' => 'ChinaMainland',
        'localName' => 'LocalName',
        'pop' => 'Pop',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chinaMainland) {
            $res['ChinaMainland'] = $this->chinaMainland;
        }

        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->pop) {
            $res['Pop'] = $this->pop;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ChinaMainland'])) {
            $model->chinaMainland = $map['ChinaMainland'];
        }

        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['Pop'])) {
            $model->pop = $map['Pop'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
