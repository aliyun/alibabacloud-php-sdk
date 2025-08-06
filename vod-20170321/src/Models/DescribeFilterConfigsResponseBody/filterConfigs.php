<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeFilterConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class filterConfigs extends Model
{
    /**
     * @var string
     */
    public $filterName;

    /**
     * @var string
     */
    public $itemConfigs;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuId;
    protected $_name = [
        'filterName' => 'FilterName',
        'itemConfigs' => 'ItemConfigs',
        'type' => 'Type',
        'uuId' => 'UuId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterName) {
            $res['FilterName'] = $this->filterName;
        }

        if (null !== $this->itemConfigs) {
            $res['ItemConfigs'] = $this->itemConfigs;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uuId) {
            $res['UuId'] = $this->uuId;
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
        if (isset($map['FilterName'])) {
            $model->filterName = $map['FilterName'];
        }

        if (isset($map['ItemConfigs'])) {
            $model->itemConfigs = $map['ItemConfigs'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UuId'])) {
            $model->uuId = $map['UuId'];
        }

        return $model;
    }
}
